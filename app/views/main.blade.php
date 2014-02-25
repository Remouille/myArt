@extends('layouts.master') 

@section('content') 	
			<div class="row">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab">Group 1</a></li>
					<li><a href="#profile" data-toggle="tab">Group 2</a></li>
					<li><a href="#messages" data-toggle="tab">Group 3</a></li>
					<li><a href="#settings" data-toggle="tab">Group 4</a></li>
				</ul>
				<div class="tab-content row">
					<div class="tab-pane fade in active" id="home">
						<div class ="col-md-3">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>User</th>
									<th>Proximity</th>								
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
						</div>
						<div class ="col-md-3">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>Atrtwork</th>
									<th>Rate</th>								
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
						</div>
						<div id="chartdiv" style="height:400px;" class="col-md-6"></div>
					</div>
					<div class="tab-pane fade" id="profile">Lorem ipsum dolor sit amet, adipisicing elit, sed do
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					<div class="tab-pane fade" id="messages">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					<div class="tab-pane fade" id="settings">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<button type="button" class="btn btn-primary">Primary</button>
					</div>
				</div>
			</div>
@stop