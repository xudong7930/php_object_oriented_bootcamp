<?

namespace Acme;

class RegisterUser {
    public function execute(array $data = [], Response $listener)
    {
        var_dump('registering the user.');
        $listener->userRegisterSuccess();
    }
}
