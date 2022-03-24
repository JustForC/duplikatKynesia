<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Auth;
use App\Models\Biodata;
use App\Models\University;
use App\Models\Family;
use App\Models\Networth;
use App\Models\Education;
use App\Models\Downloadable;
use App\Models\User;


class FormDownloadable extends Component
{
    use WithFileUploads;

    public $identity, $graduation, $university, $motivation;
    public $identityPath, $graduationPath, $universityPath, $motivationPath;
    public $downloadableId;

    public function mount()
    {
        if(Downloadable::where('user_id','=',Auth::user()->id)->exists())
        {
            $downloadable = Downloadable::where('user_id','=',Auth::user()->id)->first();

            $this->downloadableId = $downloadable->id;
            $this->identityPath = $downloadable->idPath;
            $this->graduationPath = $downloadable->graduationPath;
            $this->universityPath = $downloadable->universityPath;
            $this->motivationPath = $downloadable->motivationPath;
        }
    }

    public function checkPreviousForm()
    {
        // Check previous form

        // Check Biodata
        if(Biodata::where('user_id','=',Auth::user()->id)->exists() == FALSE)
        {
            return redirect()->route('user.biodata');
        }
        // Check University
        elseif(University::where('user_id','=',Auth::user()->id)->exists() == FALSE)
        {
            return redirect()->route('user.biodata');
        }
        // Check Father
        elseif(Family::where('user_id','=',Auth::user()->id)->where('status','=','Father')->exists() == FALSE)
        {
            return redirect()->route('user.family');
        }
        // Check Mother
        elseif(Family::where('user_id','=',Auth::user()->id)->where('status','=','Mother')->exists() == FALSE)
        {
            return redirect()->route('user.family');
        }
        // Check Children
        elseif(Family::where('user_id','=',Auth::user()->id)->where('status','=','Children')->exists() == FALSE)
        {
            return redirect()->route('user.family');
        }
        // Check Networth
        elseif(Networth::where('user_id','=',Auth::user()->id)->exists() == FALSE)
        {
            return redirect()->route('user.family');
        }
        // Check Elementary
        elseif(Education::where('user_id','=',Auth::user()->id)->where('level','=','SD')->exists() == FALSE)
        {
            return redirect()->route('user.education');
        }
        // Check Junior
        elseif(Education::where('user_id','=',Auth::user()->id)->where('level','=','SMP')->exists() == FALSE)
        {
            return redirect()->route('user.education');
        }
        // Check High
        elseif(Education::where('user_id','=',Auth::user()->id)->where('level','=','SMA')->exists() == FALSE)
        {
            return redirect()->route('user.education');
        }
        // Go Save Data
        else
        {
            $this->save();
        }
    }

    public function render()
    {
        return view('livewire.form-downloadable');
    }

    public function save()
    {
        if($this->downloadableId == NULL)
        {
            $message =
            [
                'identity.required' => 'Foto Identitas Tidak Boleh Kosong',
                'identity.mimes' => 'Format File Harus jpg/jpeg/png',
                'identity.max' => 'Ukuran File Maksimal 20Mb',
                'university.required' => 'Bukti Diterima Universitas Tidak Boleh Kosong',
                'university.mimes' => 'Format File Harus jpg/jpeg/png',
                'university.max' => 'Ukuran File Maksimal 20Mb',
                'graduation.required' => 'Ijazah Tidak Boleh Kosong',
                'graduation.mimes' => 'Format File Harus pdf',
                'graduation.max' => 'Ukuran File Maksimal 20Mb',
                'motivation.required' => 'Motivation Letter Tidak Boleh Kosong',
                'motivation.mimes' => 'Format File Harus pdf',
                'motivation.max' => 'Ukuran File Maksimal 20Mb',
            ];

            $this->validate
            ([
                'identity'=> 'required|mimes:jpg,jpeg,png|max:20000',
                'graduation'=> 'required|mimes:pdf|max:20000',
                'university'=> 'required|mimes:jpg,jpeg,png|max:20000',
                'motivation'=> 'required|mimes:pdf|max:20000',
            ], $message);

            // Upload Identity
            $idDirectory = '/upload/identity/';
            $idName = time().'.'.$this->identity->extension();
            $this->identity->storeAs('public'.$idDirectory, $idName);
            $identityPath = 'storage' . $idDirectory . $idName;
            // End Upload Identity

            // Upload Graduation
            $graduationDirectory = '/upload/graduation/';
            $graduationName = time().'.'.$this->graduation->extension();
            $this->graduation->storeAs('public'.$graduationDirectory, $graduationName);
            $graduationPath = 'storage' . $graduationDirectory . $graduationName;
            // End Upload Graduation

            // Upload University
            $universityDirectory = '/upload/university/';
            $universityName = time().'.'.$this->university->extension();
            $this->university->storeAs('public'.$universityDirectory, $universityName);
            $universityPath = 'storage' . $universityDirectory . $universityName;
            // End Upload University

            // Upload Motivation
            $motivationDirectory = '/upload/motivation/';
            $motivationName = time().'.'.$this->motivation->extension();
            $this->motivation->storeAs('public'.$motivationDirectory, $motivationName);
            $motivationPath = 'storage' . $motivationDirectory . $motivationName;
            // End Upload Motivation

            $downloadable = Downloadable::create([
                'user_id' => Auth::user()->id,
                'idPath' => $identityPath,
                'graduationPath' => $graduationPath,
                'universityPath' => $universityPath,
                'motivationPath' => $motivationPath,
            ]);

            $this->downloadableId = $downloadable->id;
            $this->identityPath = $downloadable->idPath;
            $this->graduationPath = $downloadable->graduationPath;
            $this->universityPath = $downloadable->universityPath;
            $this->motivationPath = $downloadable->motivationPath;
        }
        else
        {
            // Check ID
            if(isset($this->identity))
            {
                $idDirectory = '/upload/identity/';
                $idName = time().'.'.$this->identity->extension();
                $this->identity->storeAs('public'.$idDirectory, $idName);
                $identityPath = 'storage' . $idDirectory . $idName;
            }
            else
            {
                $identityPath = $this->identityPath;
            }

            // Check Graduation
            if(isset($this->graduation))
            {
                $graduationDirectory = '/upload/graduation/';
                $graduationName = time().'.'.$this->graduation->extension();
                $this->graduation->storeAs('public'.$graduationDirectory, $graduationName);
                $graduationPath = 'storage' . $graduationDirectory . $graduationName;
            }
            else
            {
                $graduationPath = $this->graduationPath;
            }

            // Check University
            if(isset($this->university))
            {
                $universityDirectory = '/upload/university/';
                $universityName = time().'.'.$this->university->extension();
                $this->university->storeAs('public'.$universityDirectory, $universityName);
                $universityPath = 'storage' . $universityDirectory . $universityName;
            }
            else
            {
                $universityPath = $this->universityPath;
            }

            // Check Motivation
            if(isset($this->motivation))
            {
                $motivationDirectory = '/upload/motivation/';
                $motivationName = time().'.'.$this->motivation->extension();
                $this->motivation->storeAs('public'.$motivationDirectory, $motivationName);
                $motivationPath = 'storage' . $motivationDirectory . $motivationName;
            }
            else
            {
                $motivationPath = $this->motivationPath;
            }

            Downloadable::find($this->downloadableId)->update([
                'user_id' => Auth::user()->id,
                'idPath' => $identityPath,
                'graduationPath' => $graduationPath,
                'universityPath' => $universityPath,
                'motivationPath' => $motivationPath,
            ]);

            $this->identityPath = $downloadable->idPath;
            $this->graduationPath = $downloadable->graduationPath;
            $this->universityPath = $downloadable->universityPath;
            $this->motivationPath = $downloadable->motivationPath;
        }


        User::find(Auth::user()->id)->update([
            'statusOne' => "Melakukan Test"
        ]);

        $this->dispatchBrowserEvent('showAlert');
        $this->clearInput();
    }

    public function clearInput()
    {
        $this->identity = NULL;
        $this->graduation = NULL;
        $this->university = NULL;
        $this->motivation = NULL;
    }
}
