<?php
date_default_timezone_set('Europe/Stockholm');

include_once 'deployer/common.php';

server( 'production', 'elseif.se' )
	->env('deploy_path','~/l35uikit.elseif.se')
	->user('forge')
	->env('branch', 'master')
	->stage('production')
	->identityFile();

set('repository', 'git@github.com:ekandreas/l35uikit.git');

set('env', 'production');
set('keep_releases', 10);
set('shared_dirs', ['storage']);
set('writable_dirs', ['storage']);
set('shared_files', ['.env']);
set('env_vars', '/usr/bin/env');
set('writable_use_sudo', '');

task( 'deploy', [
	'deploy:prepare',
	'deploy:release',
	'deploy:update_code',
	'deploy:vendors',
	'deploy:shared',
	'deploy:writable',
	'deploy:symlink',
	'cleanup',
	'success'
] )->desc( 'Deploy your project, eg "dep deploy production"' );

