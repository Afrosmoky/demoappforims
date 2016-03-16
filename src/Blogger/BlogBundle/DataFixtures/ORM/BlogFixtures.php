<?php

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blogger\BlogBundle\Entity\Blog;

class BlogFixtures extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$blog1 = new Blog();
		$blog1->setTitle('A day with Symfony2');
		$blog1->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
		$blog1->setAuthor('dsyph3r');
		$blog1->setCreated(new \DateTime());
		$blog1->setUpdated($blog1->getCreated());
		$manager->persist($blog1);

		$blog2 = new Blog();
		$blog2->setTitle('The roof is on fire');
		$blog2->setBlog('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
		$blog2->setAuthor('Piotr Szulc');
		$blog2->setCreated(new \DateTime("2011-07-23 06:12:33"));
		$blog2->setUpdated($blog2->getCreated());
		$manager->persist($blog2);

		$blog3 = new Blog();
		$blog3->setTitle('What the eyes see and the ears hear, the mind believes');
		$blog3->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
		$blog3->setAuthor('Gabriel');
		$blog3->setCreated(new \DateTime("2011-07-16 16:14:06"));
		$blog3->setUpdated($blog3->getCreated());
		$manager->persist($blog3);

		$blog4 = new Blog();
		$blog4->setTitle('Something stupid');
		$blog4->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
		$blog4->setAuthor('Michael Jordan');
		$blog4->setCreated(new \DateTime("2011-06-02 18:54:12"));
		$blog4->setUpdated($blog4->getCreated());
		$manager->persist($blog4);

		$blog5 = new Blog();
		$blog5->setTitle('You\'re either a one or a zero. Alive or dead');
		$blog5->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
		$blog5->setAuthor('Bill Clinton');
		$blog5->setCreated(new \DateTime("2011-04-25 15:34:18"));
		$blog5->setUpdated($blog5->getCreated());
		$manager->persist($blog5);

		$manager->flush();
		
		$this->addReference('blog-1', $blog1);
		$this->addReference('blog-2', $blog2);
		$this->addReference('blog-3', $blog3);
		$this->addReference('blog-4', $blog4);
		$this->addReference('blog-5', $blog5);
	}
	
	public function getOrder()
	{
		return 1;
	}

}