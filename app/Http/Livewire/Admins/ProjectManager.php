<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Project;
class ProjectManager extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $confirmingDelete = false;
    public $deleteId = null;
    public function delete($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        session()->flash('message', 'Proyekt uğurla silindi.');
    }
    public function getProjectData($project)
    {
        $columns = ['id', 'name', 'description', 'link', 'created_at'];
        $data = [];

        foreach ($columns as $column) {
            $data[$column] = ($this->isFileSetting($column)) ? '<img src="' . asset($project->$column) . '" alt="Image" style="max-width: 100px;">' : $project->$column;
        }

        return $data;
    }
    public $name;
    public $description;
    public $link;




    public function add_project()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|image|max:1024',
            'link' => 'required|image|max:1024',
        ]);

        $descriptionFileName = $this->description->getClientOriginalName();
        $path = $this->description->storeAs('uploads', $descriptionFileName, 'public');

        $linkFileName = $this->link->getClientOriginalName();
        $linkPath = $this->link->storeAs('uploads', $linkFileName, 'public');

        Project::create([
            'name' => $this->name,
            'description' => $descriptionFileName,
            'link' => $linkFileName,
        ]);

        session()->flash('message', 'Proyekt Ugurla yükləndi!');
        $this->reset();
        $this->_page = 'project-manager';
    }
    public function show_create_form()
    {
        $this->_page = 'create';
    }
    public $_page = 'project-manager';


    public function render()
    {
        switch ($this->_page) {
            case "project-manager":
                return view('livewire.admins.project-manager.project-manager', [
                    'projects' => Project::orderBy('id', 'asc')->paginate(10),
                ])->layout('admins.layouts.app');
            case "create":
                return view('livewire.admins.project-manager.create', [
                    'projects' => Project::all()
                ])->layout('admins.layouts.app');
            default:
                return view('livewire.admins.project-manager.project-manager', [
                    'projects' => Project::orderBy('id', 'asc')->paginate(10),
                ])->layout('admins.layouts.app');
        }
    }


}

