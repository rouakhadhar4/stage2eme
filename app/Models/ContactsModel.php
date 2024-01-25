
<?
namespace App\Models;

use CodeIgniter\Model;

class ContactsModel extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'idcontact';
    protected $allowedFields = ['objet', 'email', 'message'];
}
