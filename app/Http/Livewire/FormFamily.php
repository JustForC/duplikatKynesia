<?php

namespace App\Http\Livewire;

use App\Models\Family;
use App\Models\Networth;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormFamily extends Component
{
    public $fatherName, $fatherBirthdate, $fatherBirthplace, $fatherEducation, $fatherJob;
    public $motherName, $motherBirthdate, $motherBirthplace, $motherEducation, $motherJob;
    public $childName, $childBirthdate, $childBirthplace, $childEducation, $childJob, $childGender;
    public $networthValue;
    public $fatherId, $motherId, $networthId, $childId;

    protected $listeners = [
        'getChild' => 'getChild',
        'deleteChild' => 'deleteChild',
    ];

    public function mount()
    {
        if (Family::where('user_id', '=', Auth::user()->id)->where('status', '=', 'Father')->exists()) {
            $father = Family::where('user_id', '=', Auth::user()->id)
                ->where('status', '=', 'Father')
                ->first();
            $this->fatherName = $father->name;
            $this->fatherBirthdate = $father->birthdate;
            $this->fatherBirthplace = $father->birthplace;
            $this->fatherEducation = $father->education;
            $this->fatherJob = $father->job;
            $this->fatherId = $father->id;
        }

        if (Family::where('user_id', '=', Auth::user()->id)->where('status', '=', 'Mother')->exists()) {
            $mother = Family::where('user_id', '=', Auth::user()->id)
                ->where('status', '=', 'Mother')
                ->first();
            $this->motherName = $mother->name;
            $this->motherBirthdate = $mother->birthdate;
            $this->motherBirthplace = $mother->birthplace;
            $this->motherEducation = $mother->education;
            $this->motherJob = $mother->job;
            $this->motherId = $mother->id;
        }

        if (Networth::where('user_id', '=', Auth::user()->id)->exists()) {
            $networth = Networth::where('user_id', '=', Auth::user()->id)->first();
            $this->networthValue = $networth->networth;
            $this->networthId = $networth->id;
        }
    }

    public function render()
    {
        return view('livewire.form-family');
    }

    public function save()
    {
        // Father Input
        if ($this->fatherId == null) {
            $message =
                [
                'fatherName.required' => 'Nama Ayah Tidak Boleh Kosong',
                'fatherBirthdate.required' => 'Tanggal Lahir Tidak Boleh Kosong',
                'fatherBirthplace.required' => 'Tempat Lahir Tidak Boleh Kosong',
                'fatherEducation.required' => 'Pendidikan Terakhir Harus Diisi',
                'fatherJob.required' => 'Pekerjaan Tidak Boleh Kosong',
            ];

            $this->validate
                ([
                'fatherName' => 'required',
                'fatherBirthdate' => 'required',
                'fatherBirthplace' => 'required',
                'fatherEducation' => 'required',
                'fatherJob' => 'required',
            ], $message);

            $father = Family::create([
                'user_id' => Auth::user()->id,
                'name' => $this->fatherName,
                'birthdate' => $this->fatherBirthdate,
                'birthplace' => $this->fatherBirthplace,
                'education' => $this->fatherEducation,
                'job' => $this->fatherJob,
                'status' => "Father",
                'gender' => "Pria",
            ]);

            $this->fatherId = $father->id;
        } else {
            Family::find($this->fatherId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->fatherName,
                'birthdate' => $this->fatherBirthdate,
                'birthplace' => $this->fatherBirthplace,
                'education' => $this->fatherEducation,
                'job' => $this->fatherJob,
                'status' => "Father",
                'gender' => "Pria",
            ]);
        }
        // End Father Input

        // Mother Input
        if ($this->motherId == null) {
            $message =
                [
                'motherName.required' => 'Nama Ibu Tidak Boleh Kosong',
                'motherBirthdate.required' => 'Tanggal Lahir Tidak Boleh Kosong',
                'motherBirthplace.required' => 'Tempat Lahir Tidak Boleh Kosong',
                'motherEducation.required' => 'Pendidikan Terakhir Harus Diisi',
                'motherJob.required' => 'Pekerjaan Tidak Boleh Kosong',
            ];

            $this->validate
                ([
                'motherName' => 'required',
                'motherBirthplace' => 'required',
                'motherBirthdate' => 'required',
                'motherEducation' => 'required',
                'motherJob' => 'required',
            ], $message);

            $mother = Family::create([
                'user_id' => Auth::user()->id,
                'name' => $this->motherName,
                'birthdate' => $this->motherBirthdate,
                'birthplace' => $this->motherBirthplace,
                'education' => $this->motherEducation,
                'job' => $this->motherJob,
                'status' => "Mother",
                'gender' => "Wanita",
            ]);

            $this->motherId = $mother->id;
        } else {
            Family::find($this->motherId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->motherName,
                'birthdate' => $this->motherBirthdate,
                'birthplace' => $this->motherBirthplace,
                'education' => $this->motherEducation,
                'job' => $this->motherJob,
                'status' => "Mother",
                'gender' => "Wanita",
            ]);
        }
        // End Mother Input

        // Input Networth
        if ($this->networthId == null) {
            $message =
                [
                'networthValue.required' => 'Penghasilan Orang Tua Tidak Boleh Kosong',
                'networthValue.numeric' => 'Penghasilan Orang Tua Harus Berbentuk Angka',
            ];

            $this->validate
                ([
                'networthValue' => 'required|numeric',
            ], $message);

            $networth = Networth::create([
                'user_id' => Auth::user()->id,
                'networth' => $this->networthValue,
            ]);

            $this->networthId = $networth->id;
        } else {
            Networth::find($this->networthId)->update([
                'user_id' => Auth::user()->id,
                'networth' => $this->networthValue,
            ]);
        }

        $this->dispatchBrowserEvent('showAlert');
    }

    public function getChild($id)
    {
        $child = Family::find($id);
        $this->childId = $child->id;
        $this->childName = $child->name;
        $this->childBirthdate = $child->birthdate;
        $this->childBirthplace = $child->birthplace;
        $this->childEducation = $child->education;
        $this->childJob = $child->job;
        $this->childGender = $child->gender;
    }

    public function clearChild()
    {
        $this->childId = null;
        $this->childName = null;
        $this->childBirthdate = null;
        $this->childBirthplace = null;
        $this->childEducation = null;
        $this->childJob = null;
        $this->childGender = null;
    }

    public function saveChild()
    {
        if ($this->childId == null) {
            $message =
                [
                'childName.required' => 'Nama Tidak Boleh Kosong',
                'childBirthdate.required' => 'Tanggal Lahir Tidak Boleh Kosong',
                'childBirthplace.required' => 'Tempat Lahir Tidak Boleh Kosong',
                'childEducation.required' => 'Pendidikan Terakhir Harus Diisi',
                'childJob.required' => 'Pekerjaan Tidak Boleh Kosong',
                'childGender.required' => 'Jenis Kelamin Tidak Boleh Kosong',
            ];

            $this->validate
                ([
                'childName' => 'required',
                'childBirthplace' => 'required',
                'childBirthdate' => 'required',
                'childGender' => 'required',
                'childJob' => 'required',
                'childEducation' => 'required',
            ], $message);

            Family::create([
                'user_id' => Auth::user()->id,
                'name' => $this->childName,
                'birthplace' => $this->childBirthplace,
                'birthdate' => $this->childBirthdate,
                'gender' => $this->childGender,
                'job' => $this->childJob,
                'education' => $this->childEducation,
                'status' => 'Children',
            ]);
            $this->clearChild();
            $this->dispatchBrowserEvent('showAlert');
            $this->emit('refreshTable');
        } else {
            Family::find($this->childId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->childName,
                'birthplace' => $this->childBirthplace,
                'birthdate' => $this->childBirthdate,
                'gender' => $this->childGender,
                'job' => $this->childJob,
                'education' => $this->childEducation,
                'status' => 'Children',
            ]);
            $this->clearChild();
            $this->dispatchBrowserEvent('showAlert');
            $this->emit('refreshTable');
        }
    }

    public function deleteChild($id)
    {
        $child = Family::find($id);
        $this->childId = $child->id;
        $this->childName = $child->name;

        $this->dispatchBrowserEvent('showDelete');
    }

    public function delete()
    {
        Family::find($this->childId)->delete();

        $this->emit('refreshTable');
        $this->dispatchBrowserEvent('showAlert');
        $this->dispatchBrowserEvent('closeDelete');
        $this->clearChild();
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('closeDelete');
        $this->clearChild();
    }
}
