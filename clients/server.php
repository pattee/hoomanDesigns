$resource = array_shift($paths);
 
if ($resource == 'clients') {
    $name = array_shift($paths);
 
    if (empty($name)) {
        $this->handle_base($method);
    } else {
        $this->handle_name($method, $name);
    }
 
} else {
    // We only handle resources under 'clients'
    header('HTTP/1.1 404 Not Found');
}

switch($method) {
  case 'PUT':
      $this->create_contact($name);
      break;
 
  case 'DELETE':
      $this->delete_contact($name);
      break;
 
  case 'GET':
      $this->display_contact($name);
      break;
 
  default:
      header('HTTP/1.1 405 Method Not Allowed');
      header('Allow: GET, PUT, DELETE');
      break;
  }