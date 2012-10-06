<?php
/**
 *
 * View class for APP/help/create for the DevTrack system
 * Display the help page for creating new projects
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     DevTrack Development Team 2012
 * @link          http://github.com/chrisbulmer/devtrack
 * @package       DevTrack.View.Help
 * @since         DevTrack v 0.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

echo $this->Bootstrap->page_header('HELP!'); ?>
  
<div class="row">
    <div class="span2">
        <?= $this->element('Sidebar/help') ?>
    </div>
    <div class="span10">
        <div class="well">
          <h3>Creating projects</h3>

          <p>
            To create a new project, click on the projects link in the navigation bar. Once you are on the projects home page, click on the blue "New Project" button. A form will appear allowing you to create a new project. 
          </p>

          <h4>Project name</h4>
          <p>
            You will need to enter a short name for the project. The name will be both the name of the project and of the repository (if you decide to create one). It must be a valid UNIX name - that means it must start with a letter and only contain letters, numbers, dashes and underscores. The project name <strong>must be unique</strong>.
          </p>
          <div class="alert alert-block">
            <strong>Example:</strong> devtrack
          </div>

          <h4>Project description</h4>
          <p>You can then enter a description of the project. This is useful for giving more detail about the project.
          <div class="alert alert-block">
            <strong>Example:</strong> DevTrack is the best project management tool you'll ever use! It is designed to be easy to deploy, manage and use. Features include: Git repository server, task tracking, attachments and time management. It's also 100% open source!
          </div>

          <h4>Public projects</h4>
          <p>
            DevTrack allows you to have public and private projects. By default, all your projects are private. If you wish to make a project public, then check the box "Public". The project will only be visible to registered users.
          </p>

          <h4>Repository type</h4>
          <p>DevTrack allows you to create a repository to store your code. Regardless of which option you choose, DevTrack will allow you to view your files in your web browser and compare changes between versions of a file.</p>

          <h4>And finally...</h4>
          <p>Click the button that says "Create Project"</p>

        </div>
    </div>
</div>