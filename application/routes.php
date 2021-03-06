<?php defined('SYSPATH') or die('No direct script access.');


/**
 * AJAX Routes
 */

Route::set("GETRESULTS", 'getResults')
    ->defaults(array(
        'controller' => 'Events_Ajax',
        'action'     => 'getResults'
    ));

Route::set("GETSTAGERESULT", 'getStageResult')
->defaults(array(
    'controller' => 'Events_Ajax',
    'action'     => 'getStageResult'
));

Route::set('GetCriterias', 'getCriteasWithScores')
    ->defaults(array(
        'controller' => 'Judges_Ajax',
        'action'     => 'getCriteriaScore',
    ));

Route::set('ExtraScores', 'addExtraScore')
    ->defaults(array(
        'controller' => 'Judges_Settings_Modify',
        'action'     => 'addExtraScore',
    ));

Route::set('AjaxForEvents', 'deleteEvent')
    ->defaults(array(
        'controller' => 'Events_Ajax',
        'action'     => 'deleteEvent'
    ));

Route::set('AjaxForSubstances', 'updateEventsSubstance(/<action>)')
    ->defaults(array(
        'controller' => 'Events_Ajax',
        'action'     => 'index'
    ));

Route::set('AjaxSetScore', 'setScore')
    ->defaults(array(
        'controller' => 'Judges_Ajax',
        'action'     => 'setScore'
    ));

Route::set('AjaxBlockStages', 'block(/<action>)')
    ->defaults(array(
       'controller' => 'Judges_Settings_Ajax',
        'action'    => 'block',
    ));

Route::set('HideParticipants', 'hide')
    ->defaults(array(
        'controller' => 'Judges_Settings_Ajax',
        'action'     => 'getBlockedParticipants'
    ));

Route::set('ViewParticipants', 'ViewParticipants')
    ->defaults(array(
        'controller' => 'Events_Ajax',
        'action'     => 'getparticipants'
    ));    

Route::set('ParticipantScore', 'ParticipantScore')
    ->defaults(array(
        'controller' => 'Events_Ajax',
        'action'     => 'getparticipantsscore'
    ));    

Route::set('JudgesOnline', 'getOnlineJudges')
    ->defaults(array(
        'controller' => 'Events_Ajax',
        'action'     => 'getjudgesonline'
    ));    

/** @temporary */
Route::set('VOTING', 'voting(/<action>)')
    ->defaults(array(
        'controller' => 'Voting',
        'action' => 'show'
    ));



/**
* Set the routes. Each route must have a minimum of a name, a URI and a set of
* defaults for the URI.
*/

/**
 * Default Welcome page
 */

Route::set('Welcome_Page', '')
    ->filter(function(Route $route, $params, Request $request) {
    })
    ->defaults(array(
        'controller' => 'Welcome',
        'action'     => 'index',
    ))
    ->cache();

/**
 * Authentifications
 */

Route::set('AUTH', 'auth(/<action>)')
    ->defaults(array(
        'controller' => 'Auth',
        'action' => 'index',
    ));

Route::set('SINGUP', 'signup(/<action>)')
    ->defaults(array(
        'controller'  => 'SignUp',
        'action'      => 'index',
    ));


/**
 * Profile
 */
Route::set('PROFILE', 'profile(/<subaction>)')
    ->defaults(array(
        'controller' => 'Profile_Index',
        'action'     => 'index',
    ));

/**
 * Events Static
 */

Route::set('MYEVENTS', 'events/my')
    ->defaults(array(
        'controller' => 'Events_Index',
        'action'     => 'myevents'
    ));

Route::set('ALLEVENTS', 'events/all')
    ->defaults(array(
        'controller' => 'Events_Index',
        'action'     => 'all'
    ));

Route::set('NEWEVENT', 'events/new')
    ->defaults(array(
        'controller' => 'Events_Index',
        'action'     => 'New'
    ));



/**
 * Add substances
 */
Route::set('ADDPARTICIPANTS', 'events/addparticipants/<id>')
    ->defaults(array(
        'controller'  => 'Events_Modify',
        'action'      => 'addParticipant'
    ));

Route::set('ADDJUDGE', 'events/addjudge/<id>')
    ->defaults(array(
        'controller'  => 'Judges_Modify',
        'action'      => 'addjudge'
    ));

Route::set('ADDSTAGE', 'events/addStage/<id>')
    ->defaults(array(
        'controller'  => 'Events_Modify',
        'action'      => 'addStage'
    ));


/**
 * EventMakers Page
 */

ROUTE::set('EVENTMAKER', 'events/<id>/eventmaker')
    ->defaults(array(
        'controller' => 'Events_Index',
        'action'     => 'eventmaker',
    ));

ROUTE::set('UPDATE_SCORE', 'score/update')->
    defaults(array(
        'controller' => 'Events_Modify',
        'action' => 'update_score'
));


/**
 * Judges
 */

Route::set('Judge-Settings', 'event/<id>/<action>')
    ->defaults(array(
        'controller' => 'Judges_Settings_Index',
        'action'     => ''
    ));

Route::set('Judge-Modify', '<action>')
    ->defaults(array(
        'controller' => 'Judges_Settings_Modify',
        'action'     => '',
    ));

Route::set('Judge-panels', 'event/<id>/judge/<action>')
    ->defaults(array(
        'controller' => 'Judges_Panels_Index',
        'action'     => 'panel1',
    ));

/**
 * Default Route
 */

Route::set('EVENTS', 'events(/<id>(/<action>))')
    ->filter(function($route, $params, $request){

        $id = Arr::get($params, 'id');
        if ( !Model_Events::EventExist($id) || !isset($id))
            return false;

    })
    ->defaults(array(
        'controller' => 'Events_Index',
        'action'     => 'index',
    ));

Route::set('Default', '<controller>(/<action>(/<id>))')
    ->defaults(array(
        'controller' => 'Welcome',
        'action'     => 'Index',
    ));
?>



