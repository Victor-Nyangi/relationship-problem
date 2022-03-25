-----------------------------------------------------------------------------------------------------------------------------------------
  ### Error
Call to undefined relationship [department] on model [App\Models\User].
___________________________________________________________________________
  

##The sample code thats throwing error


 public function showRegistrationForm()
    {
        $data = User::with('department')->get();
        return view('auth.register',['data'=>$data]);
   ///////// Throwing all the error here

        //array way ,['data'=>$data] == campact ('data')

        
   }

    ### The user Model relationship


 class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function departament()
    {
        return $this->belongsTo(department::class,'department_id');
    }
     
    protected $table = 'users';

    protected $fillable = [
        'department_id',
        'name',
        'last_name',
        'gender',
        'phone',
        'email',
        'password',
    ];
    
             ###### sample relationship on department model


class department extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->hasMany(User::class);
    }  

    protected $table = 'departments';
    protected $fillable = ['dpname'];
     
   
}

