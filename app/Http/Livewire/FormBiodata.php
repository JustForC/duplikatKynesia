<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Biodata;
use App\Models\University;
use App\Models\SocialMedia;
use Auth;

class FormBiodata extends Component
{
    public $name, $nickname, $gender, $birthdate, $birthplace, $telephone, $email, $idType, $idNumber;
    public $address, $code, $district, $city, $province;
    public $addressLiving, $codeLiving, $districtLiving, $cityLiving, $provinceLiving;
    public $instagram, $facebook, $twitter, $tiktok;
    public $university, $entranceType, $entranceNumber, $major;
    public $biodataId, $socialMediaId, $universityId;

    public function mount()
    {
        if(Biodata::where('user_id', '=', Auth::user()->id)->exists()){
            $biodata = Biodata::where('user_id', '=', Auth::user()->id)->first();
            $this->biodataId = $biodata->id;
            $this->name = $biodata->name;
            $this->nickname = $biodata->nickname;
            $this->gender = $biodata->gender;
            $this->birthdate = $biodata->birthdate;
            $this->birthplace = $biodata->birthplace;
            $this->telephone = $biodata->telephone;
            $this->email = $biodata->email;
            $this->idType = $biodata->idType;
            $this->idNumber = $biodata->idNumber;
            $this->address = $biodata->address;
            $this->code = $biodata->code;
            $this->district = $biodata->district;
            $this->city = $biodata->city;
            $this->province = $biodata->province;
            $this->addressLiving = $biodata->addressLiving;
            $this->codeLiving = $biodata->codeLiving;
            $this->districtLiving = $biodata->districtLiving;
            $this->cityLiving = $biodata->cityLiving;
            $this->provinceLiving = $biodata->provinceLiving;
        }

        if(SocialMedia::where('user_id', '=', Auth::user()->id)->exists()){
            $socialMedia = SocialMedia::where('user_id', '=', Auth::user()->id)->first();
            $this->socialMediaId = $socialMedia->id;
            $this->instagram = $socialMedia->instagram;
            $this->facebook = $socialMedia->facebook;
            $this->twitter = $socialMedia->twitter;
            $this->tiktok = $socialMedia->tiktok;
        }

        if(University::where('user_id', '=', Auth::user()->id)->exists()){
            $university = University::where('user_id', '=', Auth::user()->id)->first();
            $this->universityId = $university->id;
            $this->university = $university->name;
            $this->entranceType = $university->entranceType;
            $this->entranceNumber = $university->entranceNumber;
            $this->major = $university->major;
        }
    }

    public function render()
    {
        return view('livewire.form-biodata');
    }

    public function save()
    {
        if($this->biodataId == NULL){
            $message = 
            [
                'name.required' => 'Nama Tidak Boleh Kosong',
                'nickname.required' => 'Panggilan Tidak Boleh Kosong',
                'gender.required' => 'Jenis Kelamin Tidak Boleh Kosong',
                'birthdate.required' => 'Tanggal Lahir Tidak Boleh Kosong',
                'birthplace.required' => 'Tempat Lahir Tidak Boleh Kosong',
                'telephone.required' => 'Nomor Telephone Tidak Boleh Kosong',
                'telephone.between' => 'Nomor Telephone Antara 10 Sampai 13 Digit',
                'email.required' => 'Email Tidak Boleh Kosong',
                'idType.required' => 'Pilih Tanda Pengenal',
                'idNumber.required' => 'Nomor Identitas Tidak Boleh Kosong',
                'idNumber.between' => 'Nomor Identitas Antara 10 Sampai 16 Digit',
                'address.required' => 'Alamat Tidak Boleh Kosong',
                'district.required' => 'Kecamatan Tidak Boleh Kosong',
                'code.required' => 'Kode Pos Tidak Boleh Kosong',
                'code.digits' => 'Kode Pos Harus 5 Digit',
                'city.required' => 'Kota Tidak Boleh Kosong',
                'province.required' => 'Provinsi Tidak Boleh Kosong',  
                'addressLiving.required' => 'Alamat Tidak Boleh Kosong',
                'districtLiving.required' => 'Kecamatan Tidak Boleh Kosong',
                'codeLiving.required' => 'Kode Pos Tidak Boleh Kosong',
                'codeLiving.digits' => 'Kode Pos Harus 5 Digit',
                'cityLiving.required' => 'Kota Tidak Boleh Kosong',
                'provinceLiving.required' => 'Provinsi Tidak Boleh Kosong',  
            ];

            $this->validate
            ([
                'name' => 'required',
                'nickname' => 'required',
                'gender' => 'required',
                'birthdate' => 'required',
                'birthplace' => 'required',
                'telephone' => 'required|between:10,13',
                'email' => 'required',
                'idType' => 'required',
                'idNumber' => 'required|between:10,16',
                'address' => 'required',
                'district' => 'required',
                'code' => 'required|digits:5',
                'city' => 'required',
                'province' => 'required',
                'addressLiving' => 'required',
                'districtLiving' => 'required',
                'codeLiving' => 'required|digits:5',
                'cityLiving' => 'required',
                'provinceLiving' => 'required',
            ], $message);

            $biodata = Biodata::create([
                'user_id' => Auth::user()->id,
                'name' => $this->name,
                'nickname' => $this->nickname,
                'gender' => $this->gender,
                'birthdate' => $this->birthdate,
                'birthplace' => $this->birthplace,
                'telephone' => $this->telephone,
                'email' => $this->email,
                'idType' => $this->idType,
                'idNumber' => $this->idNumber,
                'address' => $this->address,
                'code' => $this->code,
                'district' => $this->district,
                'city' => $this->city,
                'province' => $this->province,
                'addressLiving' => $this->addressLiving,
                'codeLiving' => $this->codeLiving,
                'districtLiving' => $this->districtLiving,
                'cityLiving' => $this->cityLiving,
                'provinceLiving' => $this->provinceLiving,
            ]);

            $this->biodataId = $biodata->id;
        }
        else{
            Biodata::find($this->biodataId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->name,
                'nickname' => $this->nickname,
                'gender' => $this->gender,
                'birthdate' => $this->birthdate,
                'birthplace' => $this->birthplace,
                'telephone' => $this->telephone,
                'email' => $this->email,
                'idType' => $this->idType,
                'idNumber' => $this->idNumber,
                'address' => $this->address,
                'code' => $this->code,
                'district' => $this->district,
                'city' => $this->city,
                'province' => $this->province,
                'addressLiving' => $this->addressLiving,
                'codeLiving' => $this->codeLiving,
                'districtLiving' => $this->districtLiving,
                'cityLiving' => $this->cityLiving,
                'provinceLiving' => $this->provinceLiving,
            ]);
        }

        if($this->facebook != NULL){
            if($this->socialMediaId == NULL)
            {
                $socialMedia = SocialMedia::create([
                    'user_id' => Auth::user()->id,
                    'facebook' => $this->facebook,
                    'twitter' => $this->twitter,
                    'instagram' => $this->instagram,
                    'tiktok' => $this->tiktok,
                ]);

                $this->socialMediaId = $socialMedia->id;
            }
            else
            {
                SocialMedia::find($this->socialMediaId)->update([
                    'user_id' => Auth::user()->id,
                    'facebook' => $this->facebook,
                    'twitter' => $this->twitter,
                    'instagram' => $this->instagram,
                    'tiktok' => $this->tiktok,
                ]);
            }
        }

        if($this->universityId == NULL){
            $message = 
            [
                'university.required' => 'Nama Universitas Tidak Boleh Kosong',
                'major.required' => 'Jurusan Tidak Boleh Kosong',
                'entranceNumber.required' => 'Nomor Masuk Tidak Boleh Kosong',
                'entranceNumber.between' => 'Nomor Masuk Antara 10 Sampai 14 Digit',
                'entranceType.required' => 'Jalur Masuk Tidak Boleh Kosong',
            ];

            $this->validate
            ([
                'university' => 'required',
                'major' => 'required',
                'entranceNumber' => 'required|between:10,14', 
                'entranceType' => 'required', 
            ], $message);

            $university = University::create([
                'user_id' => Auth::user()->id,
                'name' => $this->university,
                'entranceType' => $this->entranceType,
                'entranceNumber' => $this->entranceNumber,
                'major' => $this->major,
            ]);

            $this->universityId = $university->id;
        }
        else{
            University::find($this->universityId)->update([
                'user_id' => Auth::user()->id,
                'name' => $this->university,
                'entranceType' => $this->entranceType,
                'entranceNumber' => $this->entranceNumber,
                'major' => $this->major,
            ]);
        }

        $this->dispatchBrowserEvent('showAlert');
    }
}
