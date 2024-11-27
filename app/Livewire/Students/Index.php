<?php
namespace App\Livewire\Students;
use App\Models\Student;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search;


    #[Layout('layouts.app')]
    public function render()
    {
        $query = Student::query();
        $query = $this->applySearch($query);

        return view('livewire.students.index', [
            'students' => $query->paginate(5)

        ]);
    }
    public function delete(Student $student)
    {
        $student->delete();

        flash()->info("Student deleted succefully!");
    }

    public function applySearch(Builder $query)
    {
        return $query->where('name', 'like', '%' . $this->search . '%')
                     ->OrWhere('email', 'like', '%' . $this->search . '%');
    }


}
