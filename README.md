# A Login Application
This is an application that logs in a user and takes the user to the dashboard.

## Prerequisities
firstly,I created a UsersSeeder which I used to create a Dummy data for a user 
 public function run()
    {
        DB::table('users')->insert([
            'name' => 'Adeku Ali',
            'email' => 'aliadeku.aam@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Adeku'),
            'remember_token' => Str::random(10),
        ]);
    }

## Technologies 
* Css
* laravel 8
* Mysql
