<div class="content-wrapper">
	<div class="content-heading">
		<div class="col-sm-4 col-md-3 hidden-xs">
			<img src="<?=URL::base(); ?>uploads/<?=$event['photo']; ?>" alt="EventImage" class="img-thumbnail img-circle">
		</div>
		<div class="col-sm-8 col-md-9 text-white text-left orgName">
			<h1><?=$event['title']; ?></h1>
		</div>		
	</div>
	<div class="col-xs-10 col-xs-offset-1">
		<div class="panel panel-default">
			<div class="panel-body">
				<form id="rating-area" action="#">
					<div>
						<input type="hidden" name="id_event" value="<?=$event['id']; ?>">
						<input type="hidden" name="id_judge" value="<?=Session::instance()->get('id_judge'); ?>">
						<?php
							for($i = 0; $i < count($stages); $i++):
								$criteria = Model_Stages::getCriteriasByStageId($stages[$i]['id']);
								$criteria = Arr::get($criteria, '0');
						?>
						<h3><?=$stages[$i]['name']; ?></h3>
						<div>
							<div class="">
								<div class="alert description">
									<p><?=$criteria['name']; ?></p>
								</div>
							</div>

							<div id="stage-<?=$i; ?>" data-toggle="portlet" class="portlets-wrapper">
								<input type="hidden" id="<?=$stages[$i]['id']; ?>" name="stage">
								<input type="hidden" id="<?=$criteria['id']; ?>" name="criteria">
									<?php
										for($j = 0; $j < count($participants[$i]); $j++):
									?>
								<div id="partisipant-id-<?=($j+1);?>" class="panel panel-primary">
									<div id="<?=$participants[$i][$j]['id']; ?>"></div>
									<div class="panel-wrapper">
										<div class="panel-body">
											<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
												<img src="<?=URL::base(); ?>uploads/<?=$participants[$i][$j]['photo']; ?>" alt="Participant<?=$j;?>" class="pronwe_boxShadow pronwe_border-1px participant">
											</div>
											<div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
												<h2><?=$participants[$i][$j]['name'];?></h2>
												
												<?php
														$id_judge = Session::instance()->get('id_judge');
														$score = Model_Score::getScore1($id_judge, $stages[$i]['id'], $criteria['id'], $participants[$i][$j]['id']);
														$score = Arr::get($score, '0');
												?>
												<input type="hidden" class="score" value="<?=$score['score'];?>">

												<div class="buttons" data-toggle="buttons" >
													<input type="hidden" name="buttons" value="<?=($j+1);?>">
													<?php for($k = 1; $k <= $criteria['maxscore']; $k++):?>
													<button class="btn mb-sm btn-s btn-primary
													<?php if($score['score'] == $k) echo "active";?> ">
														<input type="radio" name="score-<?=($i+1); ?>-<?=($j+1);?>" autocomplete="off" value="<?=$k; ?>"
														<?php if($score['score'] == $k) echo "checked";?> >   <?=$k;?>
													</button>
													<? endfor; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
		                     	<?php endfor; ?>
							</div>
							<div class="col-md-12 thanks-<?=($i); ?> text-center" style="display: none;">
								<p style="font-size: 1.5em">Проставленные баллы зафиксированны. Дождитесь появления кнопки "Показать участников".</p>
								<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
									<a class="btn btn-primary show-part-<?=($i); ?>" style="display: none;">Показать участников</a>
								</div>
							</div>
							<input type="hidden" id='confirm-step-<?=($i); ?>'>
						</div>
						<?php endfor; ?>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<button id="errorMsg" type="button" data-notify="" data-message="Вы забыли поставить балл участнику" data-options="{&quot;status&quot;:&quot;danger&quot;}" style="display: none;"></button>