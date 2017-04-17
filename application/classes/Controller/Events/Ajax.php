<?php 
header('Access-Control-Allow-Origin: *');
defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Murod's Macbook Pro
 * Date: 14.03.2016
 * Time: 23:11
 */

class Controller_Events_Ajax extends Ajax {


    public function action_index()
    {
        echo 'Method is: '. __METHOD__;
    }

    public function action_deleteEvent()
    {
        /**
        * Не впускать прямые Get запросы
        */

        if ( !parent::_is_ajax())
            $this->request('/');

        $id = Arr::get($_POST, 'id');
        return Model_Events::delete($id);
    }

    public function action_updateEventInfo()
    {
        /**
         * Не впускать прямые Get запросы
         */

        if ( !parent::_is_ajax())
            $this->request('/');

        $name   = Arr::get($_POST, 'name');  // Column name
        $value  = Arr::get($_POST, 'value');
        $id     = Arr::get($_POST, 'pk');

        echo Model_Events::updateEventByFieldName($name, $value, $id);
    }

    public function action_updateParticipant()
    {
        /**
         * Не впускать прямые Get запросы
         */

        if ( !parent::_is_ajax())
            $this->request('/');

        $name   = Arr::get($_POST, 'name');  // Column name
        $value  = Arr::get($_POST, 'value');
        $id     = Arr::get($_POST, 'pk');

        echo Model_Participants::updateParticipantByFieldName($name, $value, $id);

    }

    public function action_updateJudge()
    {
        /**
         * Не впускать прямые Get запросы
         */

        if ( !parent::_is_ajax())
            $this->request('/');



        $name   = Arr::get($_POST, 'name');  // Column name
        $value  = Arr::get($_POST, 'value');
        $id     = Arr::get($_POST, 'pk');

        echo Model_Judge::updateJudgeByFieldName($name, $value, $id);
    }

    public function action_updateStage()
    {
        /**
         * Не впускать прямые Get запросы
         */

        if ( !parent::_is_ajax())
            $this->request('/');

        $name   = Arr::get($_POST, 'name');  // Column name
        $value  = Arr::get($_POST, 'value');
        $id     = Arr::get($_POST, 'pk');

        echo Model_Stages::updateStageByFieldName($name, $value, $id);
    }

    public function action_updateCriteria()
    {
        /**
         * Не впускать прямые Get запросы
         */

        if ( !parent::_is_ajax())
            $this->request('/');

        $name   = Arr::get($_POST, 'name');  // Column name
        $value  = Arr::get($_POST, 'value');
        $id     = Arr::get($_POST, 'pk');

        echo Model_Stages::updateCriteriaByFieldName($name, $value, $id);
    }

    public function action_deleteEventsSubstance()
    {
        /**
         * Не впускать прямые Get запросы
         */

        $substance  = Arr::get($_POST, 'substance');
        $id         = Arr::get($_POST, 'id');

        if ($substance == 'delparticipant')
            Model_Participants::deleteParticipantById($id);

        if ($substance == 'deljudge')
            Model_Judge::deleteJudgesById($id);

        if ($substance == 'delstage')
            Model_Stages::deleteStagesById($id);

        if ($substance == 'delcriteria')
            Model_Stages::deleteCriteria($id);

        return 1;

    }

    public function action_participantposition()
    {
        $id_event       = Arr::get($_POST, 'id_event');
        $id_stage       = Arr::get($_POST, 'stage');
        $id_participant = Arr::get($_POST, 'participant');
        $position       = Arr::get($_POST, 'position');

        Model_Participants::setPosition($id_event, $id_stage, $id_participant, $position);
    }

    public function action_getResults()
    {
    	$id_event = Arr::get($_POST, 'id_event');

    	/** Get participants from event */
    	$participants = DB::select()
    			->from('Participants')
    			->where('id_event', '=', $id_event)
    			->execute()
    			->as_array();

        $result = array();
        
    	foreach ($participants as $participant) {
    		$id_participant = $participant['id'];
    		
    		$query = DB::select('id_participant', array(DB::expr('SUM(score)'),'total'))
				->from('Scores')
				->where('id_event', '=', $id_event)
				->and_where('id_participant', '=', $id_participant)
				->execute()
				->as_array();

            $score = $query[0]['total'];


    		$result[] = array(
    		        'score' => is_null($query[0]['total']) ? 0 : $score,
    				'id'    => $id_participant,
    				'name'  => $participant['name'],
    				'description' => $participant['description'],
    				'photo' => $participant['photo']
    			);
    	};

    	$new = self::array_sort($result, 'score', SORT_DESC);
    	$this->response->body(@json_encode($new));
    }

    public static function array_sort($array, $on, $order=SORT_ASC)
	{
	    $new_array = array();
	    $sortable_array = array();

	    if (count($array) > 0) {
	        foreach ($array as $k => $v) {
	            if (is_array($v)) {
	                foreach ($v as $k2 => $v2) {
	                    if ($k2 == $on) {
	                        $sortable_array[$k] = $v2;
	                    }
	                }
	            } else {
	                $sortable_array[$k] = $v;
	            }
	        }

	        switch ($order) {
	            case SORT_ASC:
	                asort($sortable_array);
	            break;
	            case SORT_DESC:
	                arsort($sortable_array);
	            break;
	        }

	        foreach ($sortable_array as $k => $v) {
	            $new_array[$k] = $array[$k];
	        }
	    }

    	return $new_array;
	}

    public function action_getStageResult()
    {
    	$id_event = Arr::get($_POST, 'id_event');
    	$id_stage = Arr::get($_POST, 'id_stage');

    	/** Get participants from event */
    	$participants = DB::select()
    			->from('Participants')
    			->where('id_event', '=', $id_event)
    			->execute()
    			->as_array();

    	foreach ($participants as $participant) {
    		$id_participant = $participant['id'];
    		
    		$query = DB::select('id_participant', array(DB::expr('SUM(score)'),'total'))
				->from('Scores')
				->where('id_event', '=', $id_event)
				->and_where('id_participant', '=', $id_participant)
				->and_where('id_stage', '=', $id_stage)
				->execute()
				->as_array();

    		$result[] = array(
    				'id'    => $id_participant,
    				'name'  => $participant['name'],
    				'description' => $participant['description'],
    				'photo' => $participant['photo'],
    				'score' => $query[0]['total']
    			);
    	};

		$new = self::array_sort($result, 'score', SORT_DESC);
    	$this->response->body(@json_encode($new));
    }

    public function action_getparticipants()
    {

        $id_event       = 9;
        echo json_encode(Model_Participants::getall($id_event),true);

    }

    public function action_getparticipantsscore()
    {

        $id_participant = Arr::get($_POST, 'id_participant');
        //echo json_encode(Model_Participants::getall($id_event),true);
        //echo $id_participant;
        echo json_encode(Model_Score::getScoreByParticipant($id_participant));

    }

    public function action_getjudgesonline(){

        /**
        * Getting Events Judges by id_event
        */

        $online = Model_Judge::JudgesOnline(9);

        if (count($online) == 0) {
            echo json_encode(1);            
        } else{
            echo json_encode(count($online));
        }
        
    }

}