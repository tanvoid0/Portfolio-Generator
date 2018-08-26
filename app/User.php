<?php
    
    namespace App;
    
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use App\Description;
    use App\Experience;
    use App\Skill;
    use App\Work;
    
    class User extends Authenticatable
    {
        use Notifiable;
        
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
                'name', 'email', 'password', 'username', 'admin',
        ];
        
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
                'password', 'remember_token',
        ];


        public function educations()
        {
            return $this->hasMany(Education::class);
        }

        public function educationsOrdered()
        {
            return $this->educations()->orderByDesc('end_year');
        }

        public function experiences()
        {
            return $this->hasMany(Experience::class);
        }

        public function experiencesOrdered()
        {
            return $this->experiences()->orderByDesc('end_year');
        }
        
        public function skills()
        {
            return $this->hasMany(Skill::class);
        }
        
        public function works()
        {
            return $this->hasMany(Work::class);
        }
    }
