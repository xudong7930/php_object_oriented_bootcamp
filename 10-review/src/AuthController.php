<?

namespace Acme;

class AuthController implements Response {
    protected $register;

    public function __construct(RegisterUser $register)
    {
        $this->register = $register;    
    }

    public function register()
    {
        $this->register->execute([], $this);
    }

    public function userRegisterSuccess()
    {
        var_dump('register ok');
    }

    public function userRegisterFailed()
    {
        var_dump('register failed');
    }
}
