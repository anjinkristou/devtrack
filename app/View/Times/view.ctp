<?php
/**
 *
 * View class for APP/times/view for the DevTrack system
 * Allows users to view time allocated to a project
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     DevTrack Development Team 2012
 * @link          http://github.com/chrisbulmer/devtrack
 * @package       DevTrack.View.Times
 * @since         DevTrack v 0.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

echo $this->Bootstrap->page_header("View Logged Time<small> we have been busy, haven't we?</small>");?>

<div class="row">
    <div class="span2">
        <?= $this->element('Sidebar/project') ?>
    </div>
    <div class="row">
        <?= $this->element('Time/topbar_view', array('id' => $time['Time']['id'])) ?>
        <div class="span10">
            <div class="well times form form-horizontal">
                <dl class="dl-horizontal">
                    <dt>Time Logged</dt>
                    <dd><?= $time['Time']['mins']['s'] ?></dd>
                    <dt>Description</dt>
                    <dd><?= $time['Time']['description'] ?></dd>
                    <dt>Date</dt>
                    <dd><?= $time['Time']['date'] ?></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Created By</dt>
                    <dd>
                        <?= $this->Gravatar->image($time['User']['email'], array('size' => 24), array('alt' => $time['User']['name'])) ?>
                        <?= $this->Html->link($time['User']['name'], array('controller'=>'users','action'=>'view',$time['User']['id'])) ?>
                        - <small><?= $this->Time->timeAgoInWords($time['Time']['created']) ?></small>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>
