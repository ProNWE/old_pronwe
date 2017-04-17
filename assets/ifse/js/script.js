$(document).ready(function(){

	var projects = [
		{
		    "id":"112",
		    "name":"Budget Jump To Europe (BJTE)",
		    "photo":"new_RU_BJTE.jpg"
		},
		{
		    "id":"113",
		    "name":"Career-gaidence quest \"The Faculty of Sociology\"",
		    "photo":"new_RU_Quest%20Faculty%20of%20Sociology.jpg"
		},
		{
		    "id":"114",
		    "name":"Youth Camp YMCA volunteers in the Pushkin mountains",
		    "photo":"new_RU_YMCA.jpg"
		},
		{
		    "id":"115",
		    "name":"Blackvist",
		    "photo":"RU_Blackvist.jpg",
		},
		{
		    "id":"116",
		    "name":"Cognition App",
		    "photo":"RU_Cognition%20Ap.jpg"
		},
		{
		    "id":"117",
		    "name":"diaCompanion",
		    "photo":"RU_diaCompanion.jpg"
		},
		{
		    "id":"118",
		    "name":"Education tour \"The first time in a business class\"",
		    "photo":"RU_Edu%20tour.jpg"
		},
		{
		    "id":"119",
		    "name":"Fly to the yard!",
		    "photo":"RU_Fly%20to%20the%20Yard.jpg"
		},
		{
		    "id":"120",
		    "name":"Language support site",
		    "photo":"RU_Language.jpg"
		},
		{
		    "id":"121",
		    "name":"Limitless Fashion",
		    "photo":"RU_Limitess%20fashion.jpg"
		},
		{
		    "id":"122",
		    "name":"NoteWorthy Event (NWE)",
		    "photo":"RU_Noteworthy%20Event.jpg"
		},
		{
		    "id":"123",
		    "name":"SocHack",
		    "photo":"RU_SocHack.jpg",
		},
		{
		    "id":"124",
		    "name":"Student City",
		    "photo":"RU_Stud%20city.jpg"
		},
		{
		    "id":"125",
		    "name":"T&Pro",
		    "photo":"RU_TPro.jpg"
		},
		{
		    "id":"126",
		    "name":"Coworking space for elderly people \"Vintage\"",
		    "photo":"RU_Vintage.jpg",
		},
		{
		    "id":"127",
		    "name":"Hireride",
		    "photo":"India_Hireride.jpg"
		},
		{
		    "id":"128",
		    "name":"Q Youth Foundation",
		    "photo":"US_Q%20Youth%20Foundation.jpg"
		},
		{
		    "id":"129",
		    "name":"Awareness Film Festeval \"Heal One World\"",
		    "photo":"US_Heal%20One%20World.jpg"
		},
		{
		    "id":"130",
		    "name":"After School Care Program \"Love4Life\"",
		    "photo":"US_Love4Life.jpg"
		},
		{
		    "id":"131",
		    "name":"Page It Forward",
		    "photo":"US_Page%20it%20Forward.jpg"
		},
		{
		    "id":"132",
		    "name":"Plants with a Purpose",
		    "photo":"US_Plants%20with%20a%20Purpose.jpg"
		},
		{
		    "id":"133",
		    "name":"Chance to Dream",
		    "photo":"no-team.png"
		},
	];
	var template = ["<li><div class=\"name\">", //name
				"</div><div class=\"photo\" style=\"background-image:url(http://ifse.pronwe.ru/assets/imgs/site/", //photo
				");\"><div class=\"place-icon button-right\">", //position
				"</div></div><div class=\"rating-bar\"><div class=\"vote_me\" data-pk=\"", // id
				"\"><span>Vote</span></div></div></li>"];

	var template1 = ["<li><div class=\"name\">", //name
				"</div><div class=\"photo\" style=\"background-image:url(http://ifse.pronwe.ru/assets/imgs/site/", //photo
				");\"><div class=\"place-icon button-right\">", //position
				"</div></div><div class=\"rating-bar\"><div data-pk=\"", // id
				"\" class=\"results\" style=\"width:", //procent width
				"%;\"><span class=\"animate\">", // rating - ex: 10/20
				"</span></div></div></li>"];


	/*  Append hidden class for long description */

	if ($(".event-description").height() > 500) {
        $(".event-description").addClass('card_height-500px').append('<div class="card_content-text-hidden"  title="Show full description"></div>');
    }

    $('body').on('click', '.card_content-text-hidden', function(){
         $(this).parent().removeClass().addClass('event-description');
         $(this).remove();
     });


	// Working with datetime
	var eventDate = new Date(2016,11,14,11,00);
	var currentDate = new Date();
	var diffSec = Math.ceil((eventDate - currentDate)/1000);
	var diffMin = Math.ceil(diffSec/60);
	var diffHour = Math.ceil(diffMin/60);
	var diffDay = Math.ceil(diffHour/24);

	if (diffDay == 1)
	    document.getElementById("time-counter").innerHTML += 'Tomorrow';
	else if (diffDay == 0)
	    document.getElementById("time-counter").innerHTML += 'Today';
	else if (diffDay > 0)
	    document.getElementById("time-counter").innerHTML += '' + diffDay + ' Days';
	else if (diffDay < 0)
	    document.getElementById("time-counter").innerHTML += '' + -1 * diffDay + ' Days Ago';


	// changing tabs with results

	$('#rating_total').click(function(){
		$('.top_nav a').each(function(){
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		$('.rating-list').each(function(){
			$(this).css('display','none');
		});
		$('#rating_list_total').css('display','block');
	});
	$('#rating_people').click(function(){
		$('.top_nav a').each(function(){
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		$('.rating-list').each(function(){
			$(this).css('display','none');
		});
		$('#rating_list_people').css('display','block');
	});


	/*
	 *  Append projects OnInit
	*/
	for (var i = 0; i < projects.length; i++) {
		projects[i]
	}

	/**
     * Here we should get vote (id_participant) and make function set.
     *
     * @example
     * voting.setValue(el) - Element contains data-pk with id participant
     *
     * then
     *
     * voting.saveValue()
     */
    var zone = document.getElementById('rating_list_people');

    voting.voteServer   = '/voting/save';
    voting.resetServer = '/voting/reset';

    zone.addEventListener('click', function(event) {

        var target = event.target.parentNode;

        if (!target.dataset.pk) {
            console.log("can't get pk");
            return;
        }

        voting.setVote(target);
        voting.saveValue();

		getResults();

    }, false);

    /**
     * Reset vote
     */
    var resetBtn = document.getElementById('reset');

    resetBtn.addEventListener('click', function() {
		var id = localStorage.getItem('vote');
		voting.resetValue();

		getResults();

    }, false);


	var results, results1;


	function getTotalVotes(array, N){
		var votes = 0;
		for (var i = 0; i < N; i++) {
			votes = votes + parseInt(array[i]['score']);
		}
		if (votes == 0)
			return 1;

		return votes;
	}

	function findbyId(id) {
		for (var i = 0; i < projects.length; i++) {
			if ( projects[i].id == id)
				return projects[i];
		}

	}

	getResults();

	function getResults() {

		/*   get people'scjoice award results */
		$.ajax({
			url : "/voting/get",
			type : "POST",
			crossDomain : true,
			success : function(result) {
				results = JSON.parse(result);
				var N = Object.keys(results).length, output = "", totalvotes = getTotalVotes(results, N);

				sort_array(results, N);

				var obj;

				if ( ! localStorage.getItem('vote')) {
					for (var i = 0; i < N; i++) {
						obj = findbyId(results[i]['id_participant']);
						output = output + template[0] + obj['name'] + template[1] + obj['photo'] +
										  template[2] + (i+1) + template[3] + results[i]['id_participant'] + template[4];
					}
				} else {
					for (var i = 0; i < N; i++) {
						obj = findbyId(results[i]['id_participant']);
						output = output + template1[0] + obj['name'] + template1[1] + obj['photo'] +
										  template1[2] + (i+1) + template1[3] + results[i]['id_participant'] + template1[4] +
										  ((parseInt(results[i]['score'])/totalvotes)*100) + template1[5] +
										  results[i]['score'] + "/" + totalvotes + template1[6];
					}
				}


				//console.log(output);
				$('#rating_list_people').empty().append(output);

				addVoteIcon();

			},
			error : function(error) {
				console.log("error");
			}
		});


		var judges = 6;

		/*  get event result */

		$.ajax({
			url : "http://pronwe.ru/getResults",
			type : "POST",
			crossDomain : true,
			data: {
				id_event: 10
			},
			success : function(result) {
				results1 = JSON.parse(result);
				var N = Object.keys(results1).length, output1 = "", maxscore = 25;
				sort_array(results1, N);
				//console.log(results1);

				for (var i = 0; i < N; i++) {
					output1 = output1 + template1[0] + results1[i]['name'] + template1[1] + results1[i]['photo'] +
								  template1[2] + (i+1) + template1[3] + "0" + template1[4] +
								  ((parseInt(results1[i]['score'])/maxscore)*100) + template1[5] +
								  parseInt(results1[i]['score'])/judges + "/" + maxscore + template1[6];
				}

				$('#rating_list_total').empty().append(output1);

			},
			error : function(error) {
				console.log("error");
			}
		});
	}



	function sort_array(array, N) {
		for (var i = 0; i < N - 1; i++) {
			for (var j = 0; j < N - 1 - i; j++) {
				if (array[j+1].score > array[j].score)
				{
					var tmp = array[j+1];
					array[j+1] = array[j];
					array[j] = tmp;
				}
			}
		}
	}



	function addVoteIcon(id) {

		if ( localStorage.getItem('vote') ) {
			$('[data-pk]').each(function(){
				if ( $(this).attr('data-pk') == localStorage.getItem('vote') ) {
					//console.log($(this).closest('li').children('.photo'));
					$(this).closest('li').children('.photo').append('<div id="my_vote" class="place-icon top-right"><span class="icon-medal"></span></div>');
				}
			});
			$('#reset').css('display','block');
		} else {
			$('#my_vote').remove();
			$('#reset').css('display','none');
		}
	}





});
