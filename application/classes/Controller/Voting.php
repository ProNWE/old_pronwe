<?php 
header('Access-Control-Allow-Origin: *');
defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Khaydarov Murod
 * Date: 11.12.16
 * Time: 1:53
 */

class Controller_Voting extends Controller {

    public function action_show()
    {
        $this->response->body(View::factory('voting'));
    }

    public function action_save()
    {
        $vote = Arr::get($_POST, 'vote');

        try {

            $query = DB::update('Voting')
                ->set(array('score' => DB::expr('score + 1')))
                ->where('id_participant', '=', $vote)
                ->execute();

            return true;

        } catch (Exception $e) {
            return false;
        }

    }

    public function action_get()
    {
        try {

            $scores = DB::select('id_participant', 'score')
                ->from('Voting')
                ->order_by('score', 'DESC')
                ->execute()
                ->as_array();
            
            $result = array();
            
            foreach($scores as $score) {
                $id_participant = $score['id_participant'];
                
                $participants = DB::select()
                        ->from('Participants')
                        ->where('id', '=', $id_participant)
                        ->limit(1)
                        ->execute()
                        ->current();
                        
                $result[] = array(
                        'score' => $score['score'],
                        'participant' => $participants
                    );
            }    
            
            $this->response->body(@json_encode($result));

        } catch (Exception $e) {
            echo Debug::vars($e);
        }
    }

    public function action_reset()
    {
        $vote = Arr::get($_POST, 'vote');

        try {

            $query = DB::update('Voting')
                ->set(array('score' => DB::expr('score - 1')))
                ->where('id_participant', '=', $vote)
                ->execute();

            return true;

        } catch (Exception $e) {
            return false;
        }
    }

}