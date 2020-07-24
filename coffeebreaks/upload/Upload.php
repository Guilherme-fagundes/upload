<?php


namespace coffeebreaks\upload;


class Upload
{
    private $file;
    private $name;
    private $destination;
    private $permissions;

    private $result;
    private $error;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }



    public function image(array $image, array $permissions, string $toPath): void
    {
        $this->file = $image;
        $this->permissions = $permissions;
        $this->destination = $toPath;
        $this->name = $this->file['name'];

        if ($this->file) {
            if (!in_array($this->file['type'], $this->permissions)){
                $this->result = false;
                $this->error = "permission danied";
            }else{
                $this->setImage();

            }

        }

    }

    private function setImage(): void
    {
        if (move_uploaded_file($this->file['tmp_name'], $this->destination.'/'.$this->file['name'])){
            $this->result = true;
            $this->error = "uploaded";

        }

    }

}