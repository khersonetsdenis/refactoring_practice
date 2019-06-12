<?php

interface Configurator 
{
    private $settings;
    private $configuration;
    
    public function setConnection($settings);
}

class MailConfigurator implements Configurator
{
    
    public function setConnection($settings)
    {
        $this->settings = $settings;
    }

    public function getSender()
    {
        return 'mail sender';
    }

    public function configure()
    {
        $this->configuration = $this->settings['mailer_options'];
        return $this;
    }
}

class DatabaseConfigurator implements Configurator
{
   
    public function setConnection($settings)
    {
        $this->settings = $settings;
    }

    public function getDriver()
    {
        return 'get some db driver';
    }

    public function configure()
    {
        $this->configuration['dsn'] = $this->settings['dsn'];
        $this->configuration['user'] = $this->settings['user'];
        $this->configuration['password'] = $this->settings['password'];
        return $this;
    }
}

class CacheConfigurator implements Configurator
{
    private $settings;

    private $configuration;

    public function setConnection($settings)
    {
        $this->settings = $settings;
    }

    public function getStorage()
    {
        return 'get some cache storage';
    }

    public function configure()
    {
        $this->configuration['host'] = $this->settings['host'];
        $this->configuration['port'] = $this->settings['poer'];
        $this->configuration['user'] = $this->settings['user'];
        $this->configuration['password'] = $this->settings['password'];
        return $this;
    }
}
