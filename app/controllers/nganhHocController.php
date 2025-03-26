/*

require __DIR__ . '/../config/database.php';
require __DIR__ . '/../models/svModel.php';
require __DIR__ . '/../models/nganhModel.php';
class NganhHocController {
    private $nganhHocModel;

    public function __construct($conn) {
        $this->nganhHocModel = new NganhHoc($conn);
    }

    public function getAllNganh() {
        $nganh = $this->nganhHocModel->getAllnganh();
        echo json_encode($nganh);
    }

}
*/