<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\Education;
use App\Models\Training;
use App\Models\Achievement;
use App\Models\Language;
use App\Models\Organization;
use App\Models\Talent;

class FormEducation extends Component
{
    // Variabel Pendidikan
    public $elementaryName, $elementaryProvince, $elementaryCity, $elementaryEnter, $elementaryGraduate;
    public $juniorName, $juniorProvince, $juniorCity, $juniorEnter, $juniorGraduate;
    public $highName, $highProvince, $highCity, $highEnter, $highGraduate, $highMajor;
    public $elementaryId, $juniorId, $highId;
    // End Variabel Pendidikan

    // Variabel Pelatihan
    public $trainingName, $trainingYear, $trainingPeriod, $trainingOrganizer, $trainingCertificate;
    public $trainingId;
    // End Variabel Pelatihan

    // Variabel Prestasi
    public $achievementName, $achievementOrganizer, $achievementLevel;
    public $achievementId;
    // End Variabel Prestasi

    // Variabel Bahasa
    public $languageName, $languageTalk, $languageWrite, $languageRead, $languageListen;
    public $languageId;
    // End Variabel Bahasa

    // Variabel Organisasi
    public $organizationName, $organizationPeriod, $organizationPosition, $organizationDescription;
    public $organizationId;
    // End Variabel Organisasi

    // Variabel Talent
    public $talentName;
    public $talentId;
    // End Variabel Talent

    protected $listeners = [
        'getTraining' => 'getTraining',
        'deleteTraining' => 'deleteTraining',
        'getAchievement' => 'getAchievement',
        'deleteAchievement' => 'deleteAchievement',
        'getLanguage' => 'getLanguage',
        'deleteLanguage' => 'deleteLanguage',
        'getOrganization' => 'getOrganization',
        'deleteOrganization' => 'deleteOrganization',
        'getTalent' => 'getTalent',
        'deleteTalent' => 'deleteTalent',
    ];

    public function mount()
    {
        if(Education::where('user_id', '=', Auth::user()->id)->where('level','=','SD')->exists()){
            $elementary = Education::where('user_id', '=', Auth::user()->id)
                                    ->where('level','=','SD')
                                    ->first();

            $this->elementaryId = $elementary->id;
            $this->elementaryName = $elementary->name;
            $this->elementaryProvince = $elementary->province;
            $this->elementaryCity = $elementary->city;
            $this->elementaryEnter = $elementary->enter;
            $this->elementaryGraduate = $elementary->graduate;
        }

        if(Education::where('user_id', '=', Auth::user()->id)->where('level','=','SMP')->exists()){
            $junior = Education::where('user_id', '=', Auth::user()->id)
                                    ->where('level','=','SMP')
                                    ->first();

            $this->juniorId = $junior->id;
            $this->juniorName = $junior->name;
            $this->juniorProvince = $junior->province;
            $this->juniorCity = $junior->city;
            $this->juniorEnter = $junior->enter;
            $this->juniorGraduate = $junior->graduate;
        }

        if(Education::where('user_id', '=', Auth::user()->id)->where('level','=','SMA')->exists()){
            $high = Education::where('user_id', '=', Auth::user()->id)
                                    ->where('level','=','SMA')
                                    ->first();

            $this->highId = $high->id;
            $this->highName = $high->name;
            $this->highProvince = $high->province;
            $this->highCity = $high->city;
            $this->highEnter = $high->enter;
            $this->highGraduate = $high->graduate;
            $this->highMajor = $high->major;
        }
    }

    public function render()
    {
        return view('livewire.form-education');
    }

    public function saveEducation()
    {
        // Input SD
        if($this->elementaryId == NULL){
            $message = 
            [
                'elementaryName.required' => 'Nama Sekolah Tidak Boleh Kosong',
                'elementaryProvince.required' => 'Provinsi Tidak Boleh Kosong',
                'elementaryCity.required' => 'Kota Tidak Boleh Kosong',
                'elementaryEnter.required' => 'Tahun Masuk Tidak Boleh Kosong',
                'elementaryEnter.numeric' => 'Tahun Masuk Harus Berbentuk Angka',
                'elementaryEnter.digits' => 'Tahun Masuk Harus 4 Digit',
                'elementaryGraduate.required' => 'Tahun Lulus Tidak Boleh Kosong',
                'elementaryGraduate.numeric' => 'Tahun Lulus Harus Berbentuk Angka',
                'elementaryGraduate.digits' => 'Tahun Lulus Harus 4 Digit',
            ];

            $this->validate
            ([
                'elementaryName' => 'required',
                'elementaryProvince' => 'required',
                'elementaryCity' => 'required',
                'elementaryEnter' => 'required|numeric|digits:4',
                'elementaryGraduate' => 'required|numeric|digits:4',
            ],$message);

            $elementary = Education::create([
                'user_id' => Auth::user()->id,
                'name' => $this->elementaryName,
                'province' => $this->elementaryProvince,
                'city' => $this->elementaryCity,
                'enter' => $this->elementaryEnter,
                'graduate' => $this->elementaryGraduate,
                'level' => "SD",
            ]);

            $this->elementaryId = $elementary->id;
        }
        else{
            Education::find($this->elementaryId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->elementaryName,
                'province' => $this->elementaryProvince,
                'city' => $this->elementaryCity,
                'enter' => $this->elementaryEnter,
                'graduate' => $this->elementaryGraduate,
                'level' => "SD",
            ]);
        }
        // End Input SD

        // Input SMP
        if($this->juniorId == NULL){
            $message = 
            [
                'juniorName.required' => 'Nama Sekolah Tidak Boleh Kosong',
                'juniorProvince.required' => 'Provinsi Tidak Boleh Kosong',
                'juniorCity.required' => 'Kota Tidak Boleh Kosong',
                'juniorEnter.required' => 'Tahun Masuk Tidak Boleh Kosong',
                'juniorEnter.numeric' => 'Tahun Masuk Harus Berbentuk Angka',
                'juniorEnter.digits' => 'Tahun Masuk Harus 4 Digit',
                'juniorGraduate.required' => 'Tahun Lulus Tidak Boleh Kosong',
                'juniorGraduate.numeric' => 'Tahun Lulus Harus Berbentuk Angka',
                'juniorGraduate.digits' => 'Tahun Lulus Harus 4 Digit',
            ];

            $this->validate
            ([
                'juniorName' => 'required',
                'juniorProvince' => 'required',
                'juniorCity' => 'required',
                'juniorEnter' => 'required|numeric|digits:4',
                'juniorGraduate' => 'required|numeric|digits:4',
            ], $message);

            $junior = Education::create([
                'user_id' => Auth::user()->id,
                'name' => $this->juniorName,
                'province' => $this->juniorProvince,
                'city' => $this->juniorCity,
                'enter' => $this->juniorEnter,
                'graduate' => $this->juniorGraduate,
                'level' => "SMP",
            ]);

            $this->juniorId = $junior->id;
        }
        else{
            Education::find($this->juniorId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->juniorName,
                'province' => $this->juniorProvince,
                'city' => $this->juniorCity,
                'enter' => $this->juniorEnter,
                'graduate' => $this->juniorGraduate,
                'level' => "SMP",
            ]);
        }
        // End Input SMP

        // Input SMA
        if($this->highId == NULL){
            $message = 
            [
                'highName.required' => 'Nama Sekolah Tidak Boleh Kosong',
                'highProvince.required' => 'Provinsi Tidak Boleh Kosong',
                'highCity.required' => 'Kota Tidak Boleh Kosong',
                'highEnter.required' => 'Tahun Masuk Tidak Boleh Kosong',
                'highEnter.numeric' => 'Tahun Masuk Harus Berbentuk Angka',
                'highEnter.digits' => 'Tahun Masuk Harus 4 Digit',
                'highGraduate.required' => 'Tahun Lulus Tidak Boleh Kosong',
                'highGraduate.numeric' => 'Tahun Lulus Harus Berbentuk Angka',
                'highGraduate.digits' => 'Tahun Lulus Harus 4 Digit',
                'highMajor.required' => 'Jurusan Tidak Boleh Kosong',
            ];

            $this->validate
            ([
                'highName' => 'required',
                'highProvince' => 'required',
                'highCity' => 'required',
                'highMajor' => 'required',
                'highEnter' => 'required|numeric|digits:4',
                'highGraduate' => 'required|numeric|digits:4',
            ], $message);

            $high = Education::create([
                'user_id' => Auth::user()->id,
                'name' => $this->highName,
                'province' => $this->highProvince,
                'city' => $this->highCity,
                'enter' => $this->highEnter,
                'graduate' => $this->highGraduate,
                'major' => $this->highMajor,
                'level' => "SMA",
            ]);

            $this->highId = $high->id;
        }
        else{
            Education::find($this->highId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->highName,
                'province' => $this->highProvince,
                'city' => $this->highCity,
                'enter' => $this->highEnter,
                'graduate' => $this->highGraduate,
                'major' => $this->highMajor,
                'level' => "SMA",
            ]);
        }
        // End Input SMA

        $this->dispatchBrowserEvent('showAlert');
    }

    // Training
    public function getTraining($id)
    {
        $training = Training::find($id);
        $this->trainingId = $training->id;
        $this->trainingName = $training->name;
        $this->trainingYear = $training->year;
        $this->trainingPeriod = $training->period;
        $this->trainingOrganizer = $training->organizer;
        $this->trainingCertificate = $training->certificate;
    }

    public function saveTraining()
    {
        if($this->trainingId == NULL){
            $message = 
            [
                'trainingName.required' => 'Nama Pelatihan Tidak Boleh Kosong',
                'trainingYear.required' => 'Tahun Diselenggarakan Pelatihan Tidak Boleh Kosong',
                'trainingPeriod.required' => 'Lama Pelatihan Tidak Boleh Kosong',
                'trainingOrganizer.required' => 'Penyelenggara Tidak Boleh Kosong',
                'trainingCertificate.required' => 'Harus Dipilih',
            ];

            $this->validate
            ([
                'trainingName' => 'required',
                'trainingYear' => 'required',
                'trainingPeriod' => 'required',
                'trainingOrganizer' => 'required',
                'trainingCertificate' => 'required',
            ], $message);

            Training::create([
                'user_id' => Auth::user()->id,
                'name' => $this->trainingName,
                'year' => $this->trainingYear,
                'period' => $this->trainingPeriod,
                'organizer' => $this->trainingOrganizer,
                'certificate' => $this->trainingCertificate,
            ]);
        }
        else{
            Training::find($this->trainingId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->trainingName,
                'year' => $this->trainingYear,
                'period' => $this->trainingPeriod,
                'organizer' => $this->trainingOrganizer,
                'certificate' => $this->trainingCertificate,
            ]);
        }

        $this->dispatchBrowserEvent('showAlert');
        $this->emit('refreshTraining');
        $this->clearTraining();
    }

    public function clearTraining()
    {
        $this->trainingId = NULL;
        $this->trainingName = NULL;
        $this->trainingYear = NULL;
        $this->trainingPeriod = NULL;
        $this->trainingOrganizer = NULL;
        $this->trainingCertificate = NULL;
    }

    public function deleteTraining($id)
    {
        $training = Training::find($id);
        $this->trainingId = $training->id;
        $this->trainingName = $training->name;

        $this->dispatchBrowserEvent('showDeleteTraining');
    }

    public function doDeleteTraining()
    {
        Training::find($this->trainingId)->delete();

        $this->dispatchBrowserEvent('showAlert');
        $this->emit('refreshTraining');
        $this->dispatchBrowserEvent('closeDeleteTraining');
        $this->clearTraining();
    }

    public function closeModalTraining()
    {
        $this->dispatchBrowserEvent('closeDeleteTraining');
        $this->clearTraining();
    }
    // End Training

    // Achievement
    public function getAchievement($id)
    {
        $achievement = Achievement::find($id);
        $this->achievementId = $achievement->id;
        $this->achievementName = $achievement->name;
        $this->achievementOrganizer = $achievement->organizer;
        $this->achievementLevel = $achievement->level;
    }

    public function saveAchievement()
    {
        if($this->achievementId == NULL){
            $message = 
            [
                'achievementName.required' => 'Nama Prestasi Tidak Boleh Kosong',
                'achievementOrganizer.required' => 'Penyelenggara Tidak Boleh Kosong',
                'achievementLevel.required' => 'Tingkatan Tidak Boleh Kosong',
            ];

            $this->validate
            ([
                'achievementName' => 'required',
                'achievementOrganizer' => 'required',
                'achievementLevel' => 'required',
            ],$message);

            Achievement::create([
                'user_id' => Auth::user()->id,
                'name' => $this->achievementName,
                'organizer' => $this->achievementOrganizer,
                'level' => $this->achievementLevel,
            ]);
        }
        else{
            Achievement::find($this->achievementId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->achievementName,
                'organizer' => $this->achievementOrganizer,
                'level' => $this->achievementLevel,
            ]);
        }

        $this->dispatchBrowserEvent('showAlert');
        $this->emit('refreshAchievement');
        $this->clearAchievement();
    }

    public function clearAchievement()
    {
        $this->achievementId = NULL;
        $this->achievementName = NULL;
        $this->achievementOrganizer = NULL;
        $this->achievementLevel = NULL;
    }

    public function deleteAchievement($id)
    {
        $achievement = Achievement::find($id);
        $this->achievementId = $achievement->id;
        $this->achievementName = $achievement->name;

        $this->dispatchBrowserEvent('showDeleteAchievement');
    }

    public function doDeleteAchievement()
    {
        Achievement::find($this->achievementId)->delete();

        $this->dispatchBrowserEvent('showAlert');
        $this->emit('refreshAchievement');
        $this->dispatchBrowserEvent('closeDeleteAchievement');
        $this->clearAchievement();
    }

    public function closeModalAchievement()
    {
        $this->dispatchBrowserEvent('closeDeleteAchievement');
        $this->clearAchievement();
    }
    // End Achievement

    // Language
    public function getLanguage($id)
    {        
        $language = Language::find($id);
        $this->languageId = $language->id;
        $this->languageName = $language->language;
        $this->languageWrite = $language->write;
        $this->languageRead = $language->read;
        $this->languageListen = $language->listen;
        $this->languageTalk = $language->talk;
    }

    public function saveLanguage()
    {
        if($this->languageId == NULL){
            $message = 
            [
                'languageName.required' => 'Bahasa Asing Tidak Boleh Kosong',
                'languageTalk.required' => 'Kemampuan Berbicara Tidak Boleh Kosong',
                'languageRead.required' => 'Kemampuan Membaca Tidak Boleh Kosong',
                'languageWrite.required' => 'Kemampuan Menulis Tidak Boleh Kosong',
                'languageListen.required' => 'Kemampuan Mendengar Tidak Boleh Kosong',
            ];
            
            $this->validate
            ([
                'languageName' => 'required',
                'languageTalk' => 'required',
                'languageRead' => 'required',
                'languageWrite' => 'required',
                'languageListen' => 'required',
            ],$message);

            Language::create([
                'user_id' => Auth::user()->id,
                'language' => $this->languageName,
                'read' => $this->languageRead,
                'talk' => $this->languageTalk,
                'write' => $this->languageWrite,
                'listen' => $this->languageListen,
            ]);
        }
        else{
            Language::find($this->languageId)->update([
                'user_id' => Auth::user()->id,
                'language' => $this->languageName,
                'read' => $this->languageRead,
                'talk' => $this->languageTalk,
                'write' => $this->languageWrite,
                'listen' => $this->languageListen,
            ]);
        }

        $this->dispatchBrowserEvent('showAlert');
        $this->emit('refreshLanguage');
        $this->clearLanguage();
    }

    public function clearLanguage()
    {
        $this->languageId = NULL;
        $this->languageName = NULL;
        $this->languageTalk = NULL;
        $this->languageRead = NULL;
        $this->languageWrite = NULL;
        $this->languageListen = NULL;
    }

    public function deleteLanguage($id)
    {
        $language = Language::find($id);
        $this->languageId = $language->id;
        $this->languageName = $language->language;

        $this->dispatchBrowserEvent('showDeleteLanguage');
    }

    public function doDeleteLanguage()
    {
        Language::find($this->languageId)->delete();

        $this->dispatchBrowserEvent('showAlert');
        $this->emit('refreshLanguage');
        $this->dispatchBrowserEvent('closeDeleteLanguage');
        $this->clearLanguage();
    }

    public function closeModalLanguage()
    {
        $this->dispatchBrowserEvent('closeDeleteLanguage');
        $this->clearLanguage();
    }
    // End Language

    // Organization
    public function getOrganization($id)
    {
        $organization = Organization::find($id);
        $this->organizationId = $organization->id;
        $this->organizationName = $organization->name;
        $this->organizationPeriod = $organization->period;
        $this->organizationPosition = $organization->position;
        $this->organizationDescription = $organization->description;
    }

    public function saveOrganization()
    {
        if($this->organizationId == NULL){
            $message = 
            [
                'organizationName.required' => 'Nama Organisasi Tidak Boleh Kosong',
                'organizationPeriod.required' => 'Periode Tidak Boleh Kosong',
                'organizationPosition.required' => 'Jabatan Tidak Boleh Kosong',
                'organizationDescription.required' => 'Deskripsi Tidak Boleh Kosong',
            ];

            $this->validate
            ([
                'organizationName' => 'required',
                'organizationPeriod' => 'required',
                'organizationPosition' => 'required',
                'organizationDescription' => 'required',
            ],$message);
            
            Organization::create([
                'user_id' => Auth::user()->id,
                'name' => $this->organizationName,
                'period' => $this->organizationPeriod,
                'position' => $this->organizationPosition,
                'description' => $this->organizationDescription,
            ]);
        }
        else{
            Organization::find($this->organizationId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->organizationName,
                'period' => $this->organizationPeriod,
                'position' => $this->organizationPosition,
                'description' => $this->organizationDescription,
            ]);
        }

        $this->dispatchBrowserEvent('showAlert');
        $this->emit('refreshOrganization');
        $this->clearOrganization();
    }

    public function clearOrganization()
    {
        $this->organizationId = NULL;
        $this->organizationName = NULL;
        $this->organizationPeriod = NULL;
        $this->organizationPosition = NULL;
        $this->organizationDescription = NULL;
    }

    public function deleteOrganization($id)
    {
        $organization = Organization::find($id);
        $this->organizationId = $organization->id;
        $this->organizationName = $organization->name;

        $this->dispatchBrowserEvent('showDeleteOrganization');
    }

    public function doDeleteOrganization()
    {
        Organization::find($this->organizationId)->delete();

        $this->dispatchBrowserEvent('showAlert');
        $this->emit('refreshOrganization');
        $this->dispatchBrowserEvent('closeDeleteOrganization');
        $this->clearOrganization();
    }

    public function closeModalOrganization()
    {
        $this->dispatchBrowserEvent('closeDeleteOrganization');
        $this->clearOrganization();
    }
    // End Organization

    // Talent
    public function getTalent($id)
    {
        $talent = Talent::find($id);
        $this->talentId = $talent->id;
        $this->talentName = $talent->name;
    }

    public function saveTalent()
    {
        if($this->talentId == NULL){
            $message = 
            [
                'talentName.required' => 'Nama Bakat Tidak Boleh Kosong',
            ];

            $this->validate
            ([
                'talentName' => 'required',
            ], $message);
            
            Talent::create([
                'user_id' => Auth::user()->id,
                'name' => $this->talentName,
            ]);
        }
        else{
            Talent::find($this->talentId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->talentName,
            ]);
        }

        $this->dispatchBrowserEvent('showAlert');
        $this->emit('refreshTalent');
        $this->clearTalent();
    }

    public function clearTalent()
    {
        $this->talentId = NULL;
        $this->talentName = NULL;
    }

    public function deleteTalent($id)
    {
        $talent = Talent::find($id);
        $this->talentId = $talent->id;
        $this->talentName = $talent->name;

        $this->dispatchBrowserEvent('showDeleteTalent');
    }

    public function doDeleteTalent()
    {
        Talent::find($this->talentId)->delete();

        $this->dispatchBrowserEvent('showAlert');
        $this->emit('refreshTalent');
        $this->dispatchBrowserEvent('closeDeleteTalent');
        $this->clearTalent();
    }

    public function closeModalTalent()
    {
        $this->dispatchBrowserEvent('closeDeleteTalent');
        $this->clearTalent();
    }
    // End Talent
}
