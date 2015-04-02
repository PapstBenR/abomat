<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Session;

use App\User as User;
use App\Contract as Contract;
use App\Http\Requests\MemberStoreRequest as MemberStoreRequest;
use App\Http\Requests\MemberUpdateRequest as MemberUpdateRequest;

class MemberController extends Controller {

	public function index(){
		$members = User::all();

		return view('admin.member.table')->with('members', $members);
	}

	public function show($id){
		$member = User::find($id);

		$allContracts = User::find($id)->contracts;

		return view('admin.member.show')->with('member', $member)
										->with('allContracts', $allContracts);
	}

	public function create(){
		return view('admin.member.createOrUpdate');
	}

	public function store(MemberStoreRequest $request){
		if(User::create(Request::except('_token'))){
			Session::flash('message_success', 'You have successfully created the member!');
		} else {
			Session::flash('message_error', 'Error while creating the member!');
		}

		return redirect('admin/member');
	}

	public function edit($id){
		$member = User::find($id);

		return view('admin.member.createOrUpdate')->with('member', $member);
	}

	public function update(MemberUpdateRequest $request, $id){
		$member = User::find($id)->fill(Request::except('_token'));

		if($member->save()){
			Session::flash('message_success', 'You have successfully updated the member: '.$member->email);
		} else {
			Session::flash('message_error', 'Error while updating the following member: '.$member->email);
		}

		return redirect('admin/member');
	}

	public function delete($id){
		$member = User::find($id);

		if($member->delete()){
			Session::flash('message_success', 'You have successfully deleted the member');
		} else {
			Session::flash('message_error', 'Error while deleting the following member');
		}

		return redirect('admin/member');
	}
}
