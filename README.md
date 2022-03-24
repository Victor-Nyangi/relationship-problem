         '''
    I want to enable user select existing department upon registration to the Home page

    The relationship between User model and department model does not pull the department id to be selected on registering the user
         '''

## -- Sample code from register.blade.php

                <div class="col-md-6">
                    <select id="department_id" type="text" class="form-control @error('department_id') is-invalid @enderror" name="department_id" value="{{ old('department_id') }}" required autocomplete="department_id" autofocus>
                        <option value="">--Select Department--</option>
                        @foreach($department as $empdata) //Trying to use defined variable on department controller but i have  error** undefined variable**
                        <option value="{{$empdata->id}}">{{$empdata->dpname}}</option>
                        @endforeach
                      
                    </select>

                @error('department_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                </div>

## -- Sample code user model

public function departament()
    {
        return $this->hasOne(departament::class, 'department_id');
    }


## -- Sample code department model

 public function User()
    {
        return $this->belongsTo(User::class);
    }  


    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


    Try figure that problem


    ################################################################################################################################################