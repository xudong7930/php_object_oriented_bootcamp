<?
abstract class Provider {
    abstract protected function authorize();
}

class FacebookProvider extends Provider {
    public function authorize()
    {
        return '';
    }
}
