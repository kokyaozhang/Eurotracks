<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $equips, $Identification_No, $Location, $Equipment_Name;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->equips = Post::all();
        return view('livewire.posts');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){

        $this->Equipment_Name = '';
        $this->Location = '';
        $this->Identification_No = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'Identification_No' => 'required',
            'Equipment_Name' => 'required',
        ]);

        Post::updateOrCreate(['Identification_No' => $this->Identification_No], [
            'Equipment_Name' => $this->Equipment_Name,
            'Location' => $this->Location
        ]);

        session()->flash('message',
            $this->Identification_No ? 'Post Updated Successfully.' : 'Post Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($Identification_No)
    {
        $post = Post::findOrFail($Identification_No);
        $this->Identification_No = $Identification_No;
        $this->Equipment_Name = $post->Equipment_Name;
        $this->Location = $post->Location;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($Identification_No)
    {
        Post::find($Identification_No)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
