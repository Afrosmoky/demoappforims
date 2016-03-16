<?php

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blogger\BlogBundle\Entity\Comment;
use Blogger\BlogBundle\Entity\Blog;

class CommentFixtures extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$comment = new Comment();
		$comment->setUser('Piotr');
		$comment->setComment('Duis consequat ligula tellus, et tincidunt tortor scelerisque sit amet. Proin vitae auctor ligula. Donec in commodo tortor, non semper purus.');
		$comment->setBlog($manager->merge($this->getReference('blog-1')));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Alibaba');
		$comment->setComment('Pellentesque finibus diam non elit ullamcorper, id pharetra tellus faucibus. Nam non sapien in urna iaculis rhoncus. Nam lorem elit, dignissim vel auctor ut, fermentum placerat purus.');
		$comment->setBlog($manager->merge($this->getReference('blog-1')));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Dawid');
		$comment->setComment('Nam egestas lacinia ultrices. Integer quis magna vitae lacus iaculis dignissim.');
		$comment->setBlog($manager->merge($this->getReference('blog-2')));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Kasia');
		$comment->setComment('Curabitur iaculis vel erat vitae iaculis. Nam varius est id aliquet pretium. Praesent eget ipsum quis risus gravida malesuada quis consectetur elit.');
		$comment->setBlog($manager->merge($this->getReference('blog-2')));
		$comment->setCreated(new \DateTime("2011-07-23 06:15:20"));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Dawid');
		$comment->setComment('Nam egestas lacinia ultrices.');
		$comment->setBlog($manager->merge($this->getReference('blog-2')));
		$comment->setCreated(new \DateTime("2011-07-23 06:18:35"));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Kasia');
		$comment->setComment('Proin vitae auctor ligula.');
		$comment->setBlog($manager->merge($this->getReference('blog-2')));
		$comment->setCreated(new \DateTime("2011-07-23 06:22:53"));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Dawid');
		$comment->setComment('Nam varius est id aliquet pretium. Praesent eget ipsum quis risus gravida malesuada quis consectetur elit.');
		$comment->setBlog($manager->merge($this->getReference('blog-2')));
		$comment->setCreated(new \DateTime("2011-07-23 06:25:15"));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Kasia');
		$comment->setComment('Mauris blandit malesuada orci, non dapibus augue condimentum et.');
		$comment->setBlog($manager->merge($this->getReference('blog-2')));
		$comment->setCreated(new \DateTime("2011-07-23 06:46:08"));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Dawid');
		$comment->setComment('Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;');
		$comment->setBlog($manager->merge($this->getReference('blog-2')));
		$comment->setCreated(new \DateTime("2011-07-23 10:22:46"));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Kasia');
		$comment->setComment('Nullam ut blandit ex.');
		$comment->setBlog($manager->merge($this->getReference('blog-2')));
		$comment->setCreated(new \DateTime("2011-07-23 11:08:08"));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Dawid');
		$comment->setComment('Donec efficitur porta purus ut auctor');
		$comment->setBlog($manager->merge($this->getReference('blog-2')));
		$comment->setCreated(new \DateTime("2011-07-24 18:56:01"));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Kasia');
		$comment->setComment('Mauris blandit malesuada orci, non dapibus augue condimentum et.');
		$comment->setBlog($manager->merge($this->getReference('blog-2')));
		$comment->setCreated(new \DateTime("2011-07-25 22:28:42"));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Stanley');
		$comment->setComment('Curabitur iaculis vel erat vitae iaculis.');
		$comment->setBlog($manager->merge($this->getReference('blog-3')));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('George');
		$comment->setComment('Donec efficitur porta purus ut auctor. Vivamus tristique tellus vitae odio finibus, in laoreet justo consectetur.');
		$comment->setBlog($manager->merge($this->getReference('blog-3')));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Kamil');
		$comment->setComment('Fusce luctus pellentesque dignissim.');
		$comment->setBlog($manager->merge($this->getReference('blog-5')));
		$manager->persist($comment);

		$comment = new Comment();
		$comment->setUser('Steve');
		$comment->setComment('Duis pretium elit sit amet ex porttitor, sit amet mattis est vestibulum.');
		$comment->setBlog($manager->merge($this->getReference('blog-5')));
		$manager->persist($comment);

		$manager->flush();
	}

	public function getOrder()
	{
		return 2;
	}
}