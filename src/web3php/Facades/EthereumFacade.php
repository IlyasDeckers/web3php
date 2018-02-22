<?php 
namespace IlyasDeckers\Web3PHP\Facades; 

use Illuminate\Support\Facades\Facade;

class EthereumFacade extends Facade 
{
  protected static function getFacadeAccessor() { return 'ethereum';}
}