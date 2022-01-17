<?php

namespace App\Http\Livewire;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserList extends Component
{
    public $users, $name,$email,$password,$is_active,$role_id,$user_id;
    public $updateMode = false;

    public function render()
    {   
        $id_user = auth()->id();
        $this->users = User::where('id', '<>', $id_user)->get();
        return view('livewire.user-list');
    }

    public function mount()
    {
        $this->roles = Roles::where('is_active', '=', '1')->get();;
    }

    public function store()
    { 
        try {
            $validatedDate = $this->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'role_id' => 'required',
            ]);
            $validatedDate["password"] = Hash::make($validatedDate["password"]);
            User::create($validatedDate);
    
            session()->flash('message', 'Users Created Successfully.');
    
            $this->clear();

        } catch (QueryException $e) {
            session()->flash('error', 'Error saving user');
        }
        $this->emit('userStore');
        
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::where('id',$id)->first();
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->is_active = $user->is_active;
        $this->role_id = $user->role_id;
    }

     public function update()
     {
         try {
            if ($this->user_id) {
                $validatedDate = $this->validate([
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,'.$this->user_id,
                    'is_active' => 'required',
                    'role_id' => 'required',
                ]);
                 $user = User::find($this->user_id);
                 $user->update([
                     'name' => $this->name,
                     'email' => $this->email,
                     'is_active' => $this->is_active,
                     'role_id' => $this->role_id,
                 ]);
                 $this->updateMode = false;
                 session()->flash('message', 'Users Updated Successfully.');
                 $this->clear();
             }else{
                session()->flash('error', 'Error updating user');
             }
         } catch (QueryException $e) {
            session()->flash('error', 'Error updating user');
        }
        $this->emit('userUpdate');

     }

     public function editPassword($id)
    {
        $user = User::where('id',$id)->first();
        $this->user_id = $id;
    }

     public function changePassword()
     {
         try {
            if ($this->user_id) {
                $validatedDate = $this->validate([
                    'password' => 'required',
                ]);
                 $user = User::find($this->user_id);
                 $user->update([
                     'password' => Hash::make($validatedDate["password"])
                 ]);
                 session()->flash('message', 'The password was updated successfully');
                 $this->clear();
             }else{
                session()->flash('error', 'Error updating password');
             }
         } catch (QueryException $e) {
            session()->flash('error', 'Error updating password');
        }
        $this->emit('userChagePassword');

     }

    public function clear()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->is_active = '';
        $this->role_id = '';
    }
}
