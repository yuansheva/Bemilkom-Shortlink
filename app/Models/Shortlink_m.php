<?php

namespace App\Models;
use CodeIgniter\Model;

class Shortlink_m extends Model
{
    protected $table      = 'link';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'link', 'dinas'];

    public function getLink($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function countLink()
    {
        return $this->countAll();
    }

    public function getCreateRedirect($input)

    {
        // $nama = $this->request->getVar('nama');
        // $link = $this->request->getVar('link');
        $nama = $input['nama'];
        $link = $input['link'];

        $content = "<?php

namespace App\Controllers;
        
class $nama extends BaseController

{
    public function index()
    {
         header('Location: $link');
         exit();
    }
}   
";

        $file = fopen("C:/xampp2/htdocs/BEM2022/shortlink-ci4/app/Controllers/$nama.php", "w");
        fwrite($file, $content);
        fclose($file);
    }
}
