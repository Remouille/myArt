<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class GroupActions extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'group';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		//
		// $this->getGroupProximity(Group::find($this->argument('group')), User::find($this->argument('user')));
		$this->updateGroups();
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			// array('group', InputArgument::REQUIRED, 'Group_Id to compare'),
			// array('user', InputArgument::REQUIRED, 'User_Id to compare.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			// array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

	public function getGroupProximity($group, $user)
	{
		$this->info('Comparaisons de '.$group->name.' et '.$user->name);
		$prodScal = 0;
		
		$userLikes = $user->likes;
		
		$n = 0;
		foreach ($userLikes as $key => $like) {
			$rate = $like->artwork()->rate($group)->rate;
			$n += pow($rate,2);
			$prodScal += $rate;
		}
		$norme1 = sqrt($userLikes->count());
		$norme2 = sqrt($n);
		$angle = round(acos($prodScal/($norme1*$norme2+0.00001)),3);
		// $this->info('Angle = '.$angle);
		return $angle;
	}

	public function updateGroups($distance='getGroupProximity', $k=5)
	{
		$update = 0;
		for ($i=0; $i < $k ; $i++) {
			foreach (User::all() as $key => $user) {
				$d=$this->getGroupProximity($user->group(),$user);

			 	foreach (Group::all() as $key => $group) {
			 		$dist = $this->getGroupProximity($group,$user);
			 		if ($dist < $d) {
			 			$d = $dist;
			 			$user->group_id = $group->id;
			 			$user->save();
			 			$update ++ ;
			 			$this->info('==================>>>UPDATE GROUPE');
			 		}
			 	}
			 } 
			if ($update == 0) {
				break;
			}
			foreach (Group::all() as $key => $group) {
				$nbUser = $group->users()->count();
				$usersID = $group->users();

				foreach ($group->groupRates as $key => $gr) {
					$aw = $gr->artwork();
					$this->info($aw->name);
					$nbLikesGroup = $aw->likes()->join('users', 'likes.user_id', '=', 'users.id')->where('group_id', $group->id)->count();

					if ($nbLikesGroup <> 0) {
						$rate = $nbLikesGroup/$nbUser;
						$gr->rate = $rate;
						$gr->save();
					}
					// $this->info($nbLikesGroup->count());

				}
			}
			$update = 0;
		}
	}

}
