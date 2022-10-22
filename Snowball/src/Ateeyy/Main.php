<?php

namespace Ateeyy;

use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\event\Event;
use pocketmine\entity\effect\EffectInstance;
use pocketmine\entity\effect\VanillaEffects;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByChildEntityEvent;
use pocketmine\entity\projectile\Snowball;
use pocketmine\entity\projectile\Projectile;
use pocketmine\utils\TextFormat as CL;

class Main extends PluginBase implements Listener{
  
  public function onEnable() : void {
    $this->getLogger()->info("Ezz Code Snowballs");
    $this->getServer()->getInstance()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onDisable() : void {
    
  }
  
  public function Snowball(EntityDamageEvent $event) {
    if($event instanceof EntityDamageByChildEntityEvent) {
      $child = $event->getChild();
      $entity = $event->getEntity();
      $damager = $event->getDamager();
            if($child instanceof Snowball) {
              $entity->sendMessage(CL::BLUE."Snowball ". TE::RED."You have been debuffed by " . $damager->getName());
              $damager->sendMessage(CL::BLUE."Snowball ". TE::GRAY."You Debuffed The Snowball to " . $entity->getName());
              $entity->getEffects()->add(new EffectInstance(VanillaEffects::BLINDNESS(), 7 * 7, 2));
              $entity->getEffects()->add(new EffectInstance(VanillaEffects::SLOWNESS(), 7 * 7, 2));

      }
    }
  }
}
?>
