<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 22/08/17
 * Time: 23:46
 */

interface Logger
{
    public function looger(string $message) : string;
}

class DataBaseLogger implements Logger
{
    public function __construct(Database $Database)
    {
        $this->Database = $Database;
    }

    public function looger(string $message): string
    {
        $this->DataBase->insert(['message' => $message]);
    }
}

class FileLogger implements Logger
{
    public function looger(string $message): string
    {
        $this->FileManager->create('error.log', $message);
    }
}

