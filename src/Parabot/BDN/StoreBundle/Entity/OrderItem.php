<?php
/**
 * @author JKetelaar
 */
namespace Parabot\BDN\StoreBundle\Entity;

use AppBundle\Entity\Dependencies\Script;
use Sylius\Component\Order\Model\OrderItem as SyliusOrderItem;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table("order_items")
 * @ORM\Entity
 */
class OrderItem extends SyliusOrderItem {

//    /**
//     * @var Script
//     *
//     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dependencies\Script")
//     * @ORM\JoinColumn(nullable=false)
//     */
//    private $script;
//
//    public function setScript($script) {
//        $this->script = $script;
//    }
//
//    public function getScript() {
//        return $this->script;
//    }

}