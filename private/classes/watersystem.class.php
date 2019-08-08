<?php

class WaterSystem {

// ----------START OF ACTIVE RECORD CODE----------
// tell the class what database it should be using
// static makes accessible without an instantiation
    static protected $database;

    static protected $db_columns = ['system_id', 'system_name', 'area_council', 'island', 'province', 'latitude', 'longitude', 'elevation', 'resource_type', 'system_type', 'improved', 'functionality', 'number_users'];

    static public function set_database($database) {
        self::$database = $database;
    }

    static public function find_by_sql($sql) {
        $result = self::$database->query($sql);
        if(!$result) { // error check - output the message and terminate the current script
            exit("Database query failed.");
        }

        // results into objects
        $object_array = [];
        while($record = $result->fetch_assoc()) {
            $object_array[] = self::instantiate($record);
        }

        $result->free();

        return $object_array;
    }
    // find_all
    static public function find_all() {
        $sql = 'SELECT * FROM t01a_water_system ORDER BY system_id LIMIT 1';
        return self::find_by_sql($sql);// Defined in a class :: method
    }

    // find_by_system_name
    static public function find_by_system_name($sys_name) {
        $sql = "SELECT * FROM t01a_water_system ";
        $sql .= "WHERE system_name='" . self::$database->escape_string($sys_name) . "'"; // escape the string to prevent sql injection
        $obj_array = self::find_by_sql($sql);
        if(!empty($obj_array)) {
            return array_shift($obj_array); // array_shift gets the first item in the array
        } else {
            return false;
        }
    }
    
    // find_by_system_id
    static public function find_by_id($id) {
        $sql = "SELECT * FROM t01a_water_system ";
        $sql .= "WHERE system_id='" . self::$database->escape_string($id) . "'"; // escape the string to prevent sql injection
        $obj_array = self::find_by_sql($sql);
        if(!empty($obj_array)) {
            return array_shift($obj_array); // array_shift gets the first item in the array
        } else {
            return false;
        }
    }

    static public function instantiate($record) {
        $object = new self;
        foreach($record as $property => $value) {
            if(property_exists($object, $property)) {
                $object->$property = $value;
            }
        }
        return $object;
    }

    public function create() {
        $attributes = $this->attributes();
        $sql = "INSERT INTO t01a_water_system (";
        $sql .= join(', ', array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes));
        $sql .= "')";
        $result = self::$database->query($sql);
        if($result) {
            $this->id = self::$database->insert_id;
        }
        return $result;
    }

    // properties which have database columns, excluding system_id
    public function attributes() {
        $attributes = [];
        foreach(self::$db_columns as $column) {
            if($column == 'system_id') { continue; }
            $attributes[$column] = $this->$column;
        }
        return $attributes;
    }

// ----------END OF ACTIVE RECORD CODE----------

    public $system_name;
    public $system_id;
    public $area_council;
    public $island;
    public $province;
    public $latitude;
    public $longitude;
    public $elevation;
    public $resource_type;
    public $system_type;
    public $improved;
    public $functionality;
    public $number_users;

    public const AREA_COUNCIL = ['Canal - Fanafo', 'Central Area Council', 'Central Pentecost 2', 'East Efate', 'East Malo', 'Emau', 'Erakor', 'Eratap', 'Erromango', 'Eton', 'Futuna', 'Gaua', 'Makimae', 'Malorua', 'Middle Bush Tanna', 'NE Tanna', 'Nguna/Pele', 'North Efate', 'North Erromango', 'North Pentecost', 'North Santo', 'North Tanna', 'North Tongoa', 'North West Efate', 'Paama', 'Port Vila', 'South East Malekula', 'South Erromango', 'South Malekula', 'South Santo', 'South Tanna', 'South West Malekula', 'South West Tanna', 'Southern Area Council', 'Tongariki', 'Torres', 'Vanua Lava', 'Varisu', 'Vermali', 'Vermaul', 'West Malo', 'West Tanna', 'Whitesands', 'Yarsu'];

    public const ISLAND = ['AESE', 'AKHAMB', 'AMBAE', 'AMBRYM', 'ANEITYUM', 'ANIWA', 'AORE', 'ARAKI', 'ARSEO', 'ARTOKA (HAT)', 'ATCHIN', 'AVOKH', 'AWEI', 'BATGHUTONG', 'BOKISSA', 'BUNINGA', 'EFATE', 'EKAPUM', 'EMAE', 'EMAU', 'EPI', 'ERAKOR', 'ERATAP', 'ERROMANGO', 'ERUETI', 'FUTUNA', 'GAUA', 'HIDEAWAY', 'HIU', 'IFIRA', 'INYEUC (MYSTERY)', 'IRIRIKI', 'KAKULA', 'KHUNEVEO', 'KWAKEA', 'LAMEN', 'LATHI (SAKAO)', 'LATHU', 'LE THARIA', 'LE THARO', 'LELEPA', 'LEMBONG', 'LINUA', 'LOH', 'LOPEVI', 'MAEWO', 'MAKIRA', 'MALEKULA', 'MALO', 'MALOKILIKILI', 'MALPARAVU (OYSTER)', 'MATASO', 'MAVEA', 'MERE LAVA', 'MERIG', 'METOMA', 'MOSO', 'MOTA', 'MOTA LAVA', 'NGUNA', 'NORSUP', 'PAAMA', 'PELE', 'PENTECOST', 'RAH', 'RANO', 'RATUA', 'REEF', 'SAKAO (KHOTI)', 'SANTO', 'TANGISI', 'TANGOA', 'TANNA', 'TEGUA', 'THION', 'TOGA', 'TOMMAN', 'TONGARIKI', 'TONGOA', 'TUTUBA', 'ULIVEO', 'URELAPA', 'UREPARAPARA', 'URI', 'URIPIV', 'VALA', 'VANUA LAVA', 'VAO', 'VENUE', 'VOT TANDE', 'WALA'];

    public const PROVINCE = ['MALAMPA', 'PENAMA', 'SANMA', 'SHEFA', 'TAFEA', 'TORBA',];

    public const RESOURCE_TYPE = ['Surface ', 'Rain', 'Ground', 'Gravity Feed'];

    public const SYSTEM_TYPE = ['Direct Gravity Feed', 'Indirect Gravity Feed', 'Rainwater Capture'];

    public function __construct($args=[]) {
        $this->system_name = $args['system_name'] ?? '';
        $this->system_id = $args['system_id'] ?? '';
        $this->area_council = $args['area_council'] ?? '';
        $this->island = $args['island'] ?? '';
        $this->province = $args['province'] ?? '';
        $this->latitude = $args['latitude'] ?? '';
        $this->longitude = $args['longitude'] ?? '';
        $this->elevation = $args['elevation'] ?? '';
        $this->resource_type = $args['resource_type'] ?? '';
        $this->system_type = $args['system_type'] ?? '';
        $this->improved = $args['improved'] ?? '';
        $this->functionality = $args['functionality'] ?? '';
        $this->number_users = $args['number_users'] ?? '';
    }

    public function name() {
        return "{$this->system_name}";
    }

}

?>