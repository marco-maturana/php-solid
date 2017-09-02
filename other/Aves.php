<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 01/09/17
 * Time: 23:06
 */

interface Aves
{
    public function andar();
}

interface AvesQueVoam extends Aves
{
    public function voar();
}

interface AvesQueNadam extends Aves
{
    public function nadar();
}

class Pato implements AvesQueVoam, AvesQueNadam
{

    public function voar()
    {
        // TODO: Implement voar() method.
    }

    public function nadar()
    {
        // TODO: Implement nadar() method.
    }

    public function andar()
    {
        // TODO: Implement andar() method.
    }
}

class Pinguim implements Aves
{
    public function nadar()
    {
        // TODO: Implement nadar() method.
    }

    public function andar()
    {
        // TODO: Implement andar() method.
    }
}

class Andorinha implements AvesQueVoam
{

    public function andar()
    {
        // TODO: Implement andar() method.
    }

    public function voar()
    {
        // TODO: Implement voar() method.
    }
}

class AmbienteAviario
{
    /**
     * Pinguim
     * Pato
     * Andorinha
     *
     * @param Aves $ave
     */
    public function __construct(Aves $ave)
    {
         $ave->andar();
    }
}

class AmbienteAgua
{
    /**
     * Pinguim
     * Pato
     *
     * @param Aves $ave
     */
    public function __construct(AvesQueNadam $ave)
    {
        $ave->nadar();
    }
}