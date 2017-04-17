<?php
/**
 * Created by PhpStorm.
 * User: Murod's Macbook Pro
 * Date: 16.04.2016
 * Time: 13:47
 */

class Model_Score extends Model {

    public static function set($id_event, $id_participant, $id_stage, $id_criteria, $id_judge, $score)
    {
        $select = DB::select()->from('Scores')->where('id_event', '=', $id_event)
                    ->and_where('id_participant', '=', $id_participant)
                    ->and_where('id_stage', '=', $id_stage)
                    ->and_where('id_criteria', '=' , $id_criteria )
                    ->and_where('id_judge', '=', $id_judge)
                    ->execute();

        if ( count($select) == 0 || !isset($select) ) {
            $insert = DB::insert('Scores', array(
              'id_event', 'id_participant', 'id_stage', 'id_judge', 'id_criteria', 'score'
            ))->values(array(
                $id_event, $id_participant, $id_stage, $id_judge, $id_criteria, $score
            ))->execute();
        }
        else {
            $update = DB::update('Scores')->set(array(
                'score' => $score
            ))->where('id_event', '=', $id_event)
                ->and_where('id_participant', '=', $id_participant)
                ->and_where('id_stage', '=', $id_stage)
                ->and_where('id_judge', '=', $id_judge)
                ->and_where('id_criteria','=', $id_criteria)
                ->execute();
        }
    }
    public static function getScores($id_judge, $id_stage, $id_participant) {
        $select = DB::select()->from('Scores')->where('id_judge', '=', $id_judge )
                                ->and_where('id_stage', '=' , $id_stage )
                                ->and_where('id_participant', '=' , $id_participant )
                                ->execute()
                                ->as_array();

        return $select;
    }

    public static function getScore1($id_judge, $id_stage, $id_criteria, $id_participant) {
        $select = DB::select()->from('Scores')->where('id_judge', '=', $id_judge )
                                ->and_where('id_stage', '=' , $id_stage )
                                ->and_where('id_criteria', '=' , $id_criteria )
                                ->and_where('id_participant', '=' , $id_participant )
                                ->execute()
                                ->as_array();

        return $select;
    }

    public static function getScore($id_event, $id_stage, $id_judge, $id_participant) {
        $select = DB::select(array(DB::expr('SUM(`score`)'), 'total'))->from('Scores')->where('id_event', '=', $id_event)
                ->and_where('id_stage', '=', $id_stage)
                ->and_where('id_judge', '=', $id_judge)
                ->and_where('id_participant', '=', $id_participant)
                ->limit(1)
                ->execute()
                ->as_array();

        return Arr::get($select, '0')['total'] ?: 0;
    }

    public static function getTotalScore($id_event, $id_judge, $id_participant) {
        $select = DB::select(array(DB::expr('SUM(`score`)'), 'total'))->from('Scores')->where('id_event', '=', $id_event)
            ->and_where('id_judge', '=', $id_judge)
            ->and_where('id_participant', '=', $id_participant)
            ->execute()
            ->as_array();

        return Arr::get($select, '0')['total'] ?: 0;
    }
    
    

    public static function getAdditionalScores($id_event, $id_stage, $participant) {

        if ($id_stage != 0) {
        $select = DB::select(array(DB::expr('SUM(`score`)'), 'total'))->from('Scores')
                        ->where('id_event', '=', $id_event)
                        ->and_where('id_stage', '=', $id_stage)
                        ->and_where('id_participant', '=', $participant)
                        ->and_where('id_judge', '=', '0')
                        ->execute()
                        ->as_array();
        }
        else {
            $select = DB::select(array(DB::expr('SUM(`score`)'), 'total'))->from('Scores')
                ->where('id_event', '=', $id_event)
                ->and_where('id_participant', '=', $participant)
                ->and_where('id_judge', '=', '0')
                ->execute()
                ->as_array();
        }
        return Arr::get($select, '0')['total'] ?: 0;
    }


    public static function getCriteriasWithScores($id_judge, $id_stage, $id_participant) {
        $select = DB::select()->from('Scores')->where('id_stage', '=', $id_stage)
                                ->and_where('id_participant', '=', $id_participant )
                                ->and_where('id_judge' , '=' , $id_judge )
                                ->execute()
                                ->as_array();
        return $select;
    }

    public static function getScoreByParticipant($id_participant) {
        $stage1 = DB::select(array(DB::expr('SUM(`score`)'), 'total'))
                                                    ->from('Scores')
                                                    ->where('id_participant', '=', $id_participant)
                                                    ->and_where('id_event', '=', 9)
                                                    ->and_where('id_stage', '=', 12)
                                                    ->execute()
                                                    ->get('total');

        $stage2 = DB::select(array(DB::expr('SUM(`score`)'), 'total'))
                                                    ->from('Scores')
                                                    ->where('id_participant', '=', $id_participant)
                                                    ->and_where('id_event', '=', 9)
                                                    ->and_where('id_stage', '=', 13)
                                                    ->execute()
                                                    ->get('total');
        

        $stage3 = DB::select(array(DB::expr('SUM(`score`)'), 'total'))
                                                    ->from('Scores')
                                                    ->where('id_participant', '=', $id_participant)
                                                    ->and_where('id_event', '=', 9)
                                                    ->and_where('id_stage', '=',  0)//14)
                                                    ->execute()
                                                    ->get('total');

        if ($stage1 == null)  $stage1 = 0;
        if ($stage2 == null)  $stage2 = 0;
        if ($stage3 == null)  $stage3 = 0;

        $result = array($stage1, $stage2, $stage3);

        return $result;

    }

}