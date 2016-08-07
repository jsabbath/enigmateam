
<?php

/*personapicture.model.php*/

class PersonaModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=db_portfoliogame', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tb_persona");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new Persona();

				$per->__SET('intidpersona', $r->intidpersona);
				$per->__SET('nvchphoto', $r->nvchphoto);

				$result[] = $per;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tb_persona WHERE intidpersona = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$per = new Persona();

			$per->__SET('intidpersona', $r->intidpersona);
			$per->__SET('nvchphoto', $r->nvchphoto);

			return $per;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM tb_persona WHERE intidpersona = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Persona $data)
	{
		try 
		{
			$sql = "UPDATE tb_persona SET 
						nvchphoto = ?, 
				    WHERE intidpersona = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('nvchphoto'), 
					$data->__GET('intidpersona')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Persona $data)
	{

		try 
		{
		$sql = "INSERT INTO tb_persona (intidpersona,nvchphoto) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('intidpersona'), 
				$data->__GET('nvchphoto')

				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}