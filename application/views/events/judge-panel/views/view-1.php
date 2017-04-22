<div class="content-wrapper">
	<div class="content-heading">
		<div class="col-sm-4 col-md-3 hidden-xs">
			<img src="<?=URL::base(); ?>uploads/<?=$event['photo']; ?>" alt="EventImage" class="img-thumbnail img-circle">
		</div>
		<div class="col-sm-8 col-md-9 text-white text-left orgName">
			<h1><?=$event['title']; ?></h1>
		</div>
<!--		<a href="--><?//=URL::site('auth/logout'); ?><!--" title="Выход" class="btn-logout">-->
<!--			<em class="fa fa-sign-out logout-position"></em>-->
<!--		</a>-->
	</div>
	<div style="width:100%">

        <style>
            .steps{ display: none !important;}
        </style>
        <div class="panel panel-default">
            <div class="panel-heading" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="cursor: pointer">
                <h4>Толкование/пояснение критерия судейства Enactus</h4>
            </div>
            <div class="panel-body collapse" id="collapseExample">

                <div class="col-xs-12">
                    <p><i>Какая команда Enactus наиболее эффективно использовала предпринимательские действия, чтобы научить людей экономически, социально и экологически устойчиво улучшать свою Жизнь?</i></p>
                </div>

                <div class="col-xs-12" style="margin-top: 10px">
                    <p><b>1. Проведение основательной оценки потребностей совместно с целевой аудиторией</b></p>
                    <p>Команда сама определяет, кто является целевой аудиторией проекта.</p>
                    <p>Целевой аудиторией может быть один человек, группа людей или население целого города, района, республики. Также для целевой аудитории нет ограничений по профессиональной, возрастной, социальной или иной принадлежности.</p>
                    <p>Целевая аудитория не ограничивается малоимущими, испытывающими финансовые трудности, людьми с ограниченными возможностями или изолированными от общества.</p>
                    <p>Потенциально это любая группа людей, имеющая потребности/проблемы, на которые направлен проект Enactus.</p>
                    <p>Команда проводит оценку потребностей совместно с целевой аудиторией проекта. Команда должна отодвинуть в сторону свои сложившиеся убеждения о том, что нужно целевой аудитории, и выслушать, чего действительно хочет и в чем нуждается эта конкретная группа людей.</p>
                </div>

                <div class="col-xs-12" style="margin-top: 10px">
                    <p><b>2. Использование предпринимательских действий</b></p>
                    <p>Предпринимательские действия – это обобщающее понятие, которое включает в себя все действия, предпринятые в качестве проектных решений; это собственный подход команды к решению проблемы.</p>
                    <p>Примеры предпринимательских действий:</p>
                    <ul style="list-style: outside;">
                        <li>разработка новых методов и приемов,</li>
                        <li>использование инновационных решений,</li>
                        <li>использование новых комбинаций производственных ресурсов,</li>
                        <li>применение известных идей в новых условиях или для достижения новых результатов,</li>
                        <li>работа над улучшением устойчивости существующих проектов,</li>
                        <li>привлечение специалистов в конкретной области</li>
                    </ul>
                    <p>Предпринимательские действия не требуют от команд обязательного создания и официальной регистрации предприятия.</p>
                </div>

                <div class="col-xs-12" style="margin-top: 10px">
                    <p><b>3. Измерение и представление прямых и сопутствующих результатов</b></p>
                    <p>Команде необходимо:</p>
                    <ul style="list-style: outside;">
                        <li>четко определить методы для количественной и качественной оценки результатов проекта;</li>
                        <li>продемонстрировать измеренное улучшение жизни целевой аудитории.</li>
                    </ul>
                    <p>При измерении результатов проекта важно различать понятия «Объем работы» и «Результат».</p>
                    <p>Объем работы – это то, что сделала команда для решения проблемы. Например, количество проведенных тренингов, конференций, число участников этих тренингов, число запущенных производств, и т.п.</p>
                    <p>Результаты – это положительные изменения в жизни отдельных людей или групп населения в ходе участия в проекте. Результаты проекта зависят от объема работы. Результаты являются следствием самостоятельного успешного применения бенефициарами полученных в ходе проекта знаний, умений, навыков, что может выражаться в улучшении благосостояния, социального статуса, эмоционального состояния, уровня удовлетворенности жизнью.</p>
                    <p>Главная цель любого проекта Enactus – это обязательное достижение измеримого результата. Вложенные ресурсы и объем проделанной работы теряют свою ценность, если проект не имеет результатов.</p>
                    <p>Помимо прямых результатов, у любого проекта есть сопутствующие результаты.</p>
                    <p>Прямой результат – это позитивные изменения в жизни целевой аудитории проекта. Сопутствующие результаты – это воздействие на окружающее сообщество и принадлежащие ему активы.</p>
                </div>

                <div class="col-xs-12" style="margin-top: 10px">
                    <p><b>4. Вооружение людей новыми знаниями, умениями, навыками</b></p>
                    <p>Команда должна научить людей улучшать свою жизнь: не просто оказать разовую помощь, а передать ценные знания, умения и навыки, с помощью которых целевая аудитория сможет дальше самостоятельно улучшать свою жизнь.</p>
                    <p>Сотрудничество – это ключевой подход к работе с целевой аудиторией. Бенефициары проекта могут быть активными участниками всех этапов проекта от разработки до завершения. Команды должны быть постоянно готовы рассматривать встречные предложения при разработке своих проектов.</p>
                </div>

                <div class="col-xs-12" style="margin-top: 10px">
                    <p><b>5. Экономически, социально и экологически устойчивое улучшение Жизни</b></p>
                    <p>«Жизнь» в контексте критерия Enactus – это то, чем располагает и что делает человек для обеспечения своей жизнедеятельности.</p>
                    <p>Понятие «Жизнь» включает в себя то, что принято называть жизненными активами. Жизненные активы – это ресурсы, используемые для достижения желаемых результатов.</p>
                    <p>Пять категорий жизненных активов:</p>
                    <ul style="list-style: outside;">
                        <li>Финансовые активы: финансовые ресурсы, доступные человеку.</li>
                        <li>Социальные активы: деловые, дружеские, родственные отношения, участие в сообществах, объединениях.</li>
                        <li>Природные активы: природные ресурсы, доступные человеку (например, воздух, вода земля и т.д.).</li>
                        <li>Физические активы: инфраструктура, товары и услуги (жилье, транспорт, водоснабжение, энергоснабжение и т.д.).</li>
                        <li>Человеческие активы: знания, умения и навыки, необходимые для реализации жизненных стратегий.</li>
                    </ul>
                    <p>Во время реализации проектов команда должна учитывать экономический, социальный и экологический факторы. Команда должна продемонстрировать, что она рассмотрела все три фактора, и ее проект обоснован с экономической, социальной и экологической точек зрения.</p>
                    <p>Устойчивое улучшение Жизни – это возможность дальнейшего самостоятельного использования целевой аудиторией полученных знаний, умений, навыков.</p>
                </div>

            </div>
        </div>

		<div class="panel panel-default">
			<div class="panel-body">
				<form id="rating-area" action="#">
					<div>
						<input type="hidden" name="id_event" value="<?=$event['id']; ?>">
						<input type="hidden" name="id_judge" value="<?=Session::instance()->get('id_judge'); ?>">
						<?php for($i = 0; $i < count($stages); $i++) : ?>
						<h3><?=$stages[$i]['name'] ; ?></h3>
						<div>
							<div class="col-xs-12">
<!--								<div class="col-lg-10 col-md-9 col-sm-8 alert description" style="height: 120px">-->
<!--									<p>--><?//=$stages[$i]['description']; ?><!--</p>-->
<!--								</div>-->
							</div>
							<div id="stage-<?=$i; ?>" data-toggle="portlet" class="portlets-wrapper">
								<input type="hidden" id="<?=$stages[$i]['id']; ?>">
								<div class="col-lg-4 col-md-5">
									<ul role="tablist" class="text-center nav">
										<?php for($j = 0; $j < count($participants[$i]); $j++): ?>
											<li id="partisipant-id-<?=$i; ?>-<?=$j; ?>" role="presentation" class="btn btn-default btn_area1 ">
												<div id="<?=$participants[$i][$j]['id']; ?>"></div>
												<a href="#partisipant-<?=$i; ?>-<?=$j; ?>" aria-controls="partisipant-<?=$j; ?>" role="tab" data-toggle="tab"><?=$participants[$i][$j]['name']; ?></a>
											</li>
										<?php endfor; ?>
									</ul>
								</div>

								<div class="tab-content col-lg-offset-4 col-md-offset-5">
									<?php for($j = 0; $j < count($participants[$i]); $j++) : ?>
									<div id="partisipant-<?=$i; ?>-<?=$j; ?>" role="tabpanel" class="tab-pane ">
<!--										<img src="--><?//=URL::base(). 'uploads/' . $participants[$i][$j]['photo'] ; ?><!--" alt="" class="pronwe_boxShadow pronwe_border-1px participant img-pos">-->
										<div class="score-area">
												<?php
														$criterias = Model_Stages::getCriteriasByStageId($stages[$i]['id']);
														for($k = 0; $k < count($criterias); $k++):
													?>
											<fieldset>
												<div class="btn_area1">
													<?=$criterias[$k]['name']; ?>
												</div>
												<?php
														$id_judge = Session::instance()->get('id_judge');
														$score = Model_Score::getScore1($id_judge, $stages[$i]['id'], $criterias[$k]['id'], $participants[$i][$j]['id']);
														$score = Arr::get($score, '0');
												?>
												

												<div class="buttons" data-toggle="buttons">
													<input type="hidden" name="buttons" value="<?=$j; ?>">
													<?php for($l = 1; $l <= $criterias[$k]['maxscore']; $l++): ?>
														<button class="mb-sm btn btn-s btn-primary mark 
														<?php if($score['score'] == $l) echo "active";?> ">
															<input type="radio" id="score-<?=$i . '-'. $j. '-'. $k; ?>" name="score-<?=$stages[$i]['id'].'-'.$participants[$i][$j]['id'].'-'.$criterias[$k]['id']; ?>" autocomplete="off" value="<?=$l; ?>" <?php if($score['score'] == $l) echo "checked";?> > <?=$l; ?>
														</button>
													<?php endfor; ?>
												</div>
											</fieldset>
											<?php endfor; ?>
										</div>
									</div>
									<?php endfor; ?>
								</div>
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