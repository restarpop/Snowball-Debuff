<?php

namespace snowball\syntax;

use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\event\Event;
use pocketmine\utils\Config;
use pocketmine\entity\effect\EffectInstance;
use pocketmine\entity\effect\VanillaEffects;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerJoinEvent as PJ;
use pocketmine\event\entity\EntityDamageByChildEntityEvent;
use pocketmine\Server;
use pocketmine\entity\projectile\Snowball;
use pocketmine\entity\projectile\Projectile;
use pocketmine\utils\TextFormat;

class Loader extends PluginBase implements Listener{
  
  public function onEnable() : void {
    $this->getServer()->getInstance()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->error('Author Oficial: Syntax');
$this->getLogger()->error('Author Oficial: Syntax');
$this->getLogger()->error('Author Oficial: Syntax');
$this->getLogger()->error('Author Oficial: Syntax');
$this->getLogger()->error('Author Oficial: Syntax');
$this->getLogger()->error('Author Oficial: Syntax');
$this->saveDefaultConfig();

$this->getLogger()->info($this->getConfig()->get("enable.message"));







foreach($this->getDescription()->getAuthors() as $autor){
		if($autor === 'Syntax'){

		} else {
			Server::getInstance()->forceShutdown();
			$this->getLogger()->error('PLUGIN PROPIEDAD DE IRANZZ');
			$this->getLogger()->error('Author Oficial: Syntax');
		}
	}
  }
  
  public function onDisable() : void {
    
  }


  
  public function Snowball(EntityDamageEvent $event) {
    if($event instanceof EntityDamageByChildEntityEvent) {
      $child = $event->getChild();
      $entity = $event->getEntity();
      $damager = $event->getDamager();
            if($child instanceof Snowball) {
              $entity->sendMessage(TextFormat::colorize(str_replace(['{player}'], [$damager->getName()], $this->getConfig()->get("victima.message"))));
           $damager->sendMessage(TextFormat::colorize(str_replace(['{victima}'], [$entity->getName()], $this->getConfig()->get("player.message"))));
              $entity->getEffects()->add(new EffectInstance(VanillaEffects::BLINDNESS(), 7 * 7, 2));
              $entity->getEffects()->add(new EffectInstance(VanillaEffects::SLOWNESS(), 7 * 7, 2));

      }
    }
  }
}
?>
