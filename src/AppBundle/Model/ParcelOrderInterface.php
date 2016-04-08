namespace AppBundle\Model;

Interface ParcelOrderInterface
{
	public function setCity($city);
	public function getCity();
	public function setPostalCode($postalCode);
	public function getPostalCode();
	public function setStreet($street);
	public function getStreet();
	public function setFirstName($firstName);
	public function getFirstName();
	public function setLastName($lastName);
	public function getLastName();
	public function setPhone($phone);
	public function getPhone();
	public function setEmail($email);
	public function getEmail();
	public function setWeight($weight);
	public function getWeight();
}
