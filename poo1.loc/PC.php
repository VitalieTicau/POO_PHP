<?
class PC{
	private $ram = null;
	private $password = null;
	private $cpu = null;

	public function __construct($password, $hardware)  {
		$this->password = $password;
		$this->ram = $hardware['ram'];
		$this->cpu = $hardware['cpu'];
	}

	public function runBios() {
		if(!$this->checkHardware()){
			throw new Exception("Hardware error", 1);
		}
	}

	private function checkHardware() {
		return $this->checkRAM() && $this->checkCPU();	
	}

	private function checkRAM() {
		return $this->ram;
	}
	
	private function checkCPU() {
		return $this->cpu;
	}
	
	public function login($password)
	{
		return $password === $this->password;
	}
	
	public function startOS(){
		$this->showDesktop();
		$this->showTaskbar();
	}

	private function showDesktop() {
		echo 'Desktop showed';
	}
	
	private function showTaskbar() {
		echo 'Taskbar showed';
	}
}