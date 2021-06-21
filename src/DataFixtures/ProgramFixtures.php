<?php

namespace App\DataFixtures;

use App\Entity\Program;
use App\Service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    private $slugify;

    public function __construct(Slugify $slugify)
    {
        $this->slugify = $slugify;
    }

    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setTitle('The Walking Dead');
        $program->setSummary("Après une apocalypse ayant transformé la quasi-totalité de la population en zombies, un groupe d'hommes et de femmes mené par l'officier Rick Grimes tente de survivre... 
                                      Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde devenu méconnaissable, à travers leur périple dans le Sud profond des États-Unis.");
        $program->setPoster('https://www.themoviedb.org/t/p/original/yTNP9UOdUbGBUZ7SSVng75IwAaY.jpg');
        $program->setCategory($this->getReference('category_6'));
        $program->addActor($this->getReference('actor_18'));
        $program->addActor($this->getReference('actor_19'));
        $program->addActor($this->getReference('actor_20'));
        $program->addActor($this->getReference('actor_21'));
        $slug = $this->slugify->generate($program->getTitle());
        $program->setSlug($slug);
        $manager->persist($program);
        $this->addReference('program_0', $program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Banshee');
        $program->setSummary("Banshee, une petite ville des Etats-Unis en territoire Amish, en Pennsylvannie, est quelque peu perturbée par un nouvel arrivant énigmatique, expert en arts martiaux, qui se fait passer pour le remplaçant du shérif récemment assassiné. Il a bien l'intention de faire régner la loi, mais à sa manière, concoctant des plans qui ne servent que son intérêt...");
        $program->setPoster('https://www.themoviedb.org/t/p/original/xxfA4KDXGKpBt19ALzilTo6Jppd.jpg');
        $program->setCategory($this->getReference('category_0'));
        $program->addActor($this->getReference('actor_4'));
        $program->addActor($this->getReference('actor_8'));
        $program->addActor($this->getReference('actor_9'));
        $program->addActor($this->getReference('actor_10'));
        $slug = $this->slugify->generate($program->getTitle());
        $program->setSlug($slug);
        $manager->persist($program);
        $this->addReference('program_1', $program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Dexter');
        $program->setSummary("Brillant expert scientifique du service médico-légal de la police de Miami, Dexter Morgan est spécialisé dans l'analyse de prélèvements sanguins. Mais voilà, Dexter cache un terrible secret : il est également tueur en série. Un serial killer pas comme les autres, avec sa propre vision de la justice.");
        $program->setPoster('https://www.themoviedb.org/t/p/original/58H6Ctze1nnpS0s9vPmAAzPcipR.jpg');
        $program->setCategory($this->getReference('category_6'));
        $program->addActor($this->getReference('actor_0'));
        $program->addActor($this->getReference('actor_1'));
        $program->addActor($this->getReference('actor_2'));
        $slug = $this->slugify->generate($program->getTitle());
        $program->setSlug($slug);
        $manager->persist($program);
        $this->addReference('program_2', $program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('The Boys');
        $program->setSummary("Dans un monde fictif où les super-héros se sont laissés corrompre par la célébrité et la gloire et ont peu à peu révélé la part sombre de leur personnalité, une équipe de justiciers qui se fait appeler 'The Boys' décide de passer à l'action et d'abattre ces super-héros autrefois appréciés de tous.");
        $program->setPoster('https://www.themoviedb.org/t/p/original/yRnwcuCefgPMKqei8q00NboaOka.jpg');
        $program->setCategory($this->getReference('category_0'));
        $program->addActor($this->getReference('actor_3'));
        $program->addActor($this->getReference('actor_4'));
        $program->addActor($this->getReference('actor_5'));
        $slug = $this->slugify->generate($program->getTitle());
        $program->setSlug($slug);
        $manager->persist($program);
        $this->addReference('program_3', $program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Breaking Bad');
        $program->setSummary("Walter White, 50 ans, est professeur de chimie dans un lycée du Nouveau-Mexique. Pour subvenir aux besoins de Skyler, sa femme enceinte, et de Walt Junior, son fils handicapé, il est obligé de travailler doublement. Son quotidien déjà morose devient carrément noir lorsqu'il apprend qu'il est atteint d'un incurable cancer des poumons. Les médecins ne lui donnent pas plus de deux ans à vivre. Pour réunir rapidement beaucoup d'argent afin de mettre sa famille à l'abri, Walter ne voit plus qu'une solution : mettre ses connaissances en chimie à profit pour fabriquer et vendre du crystal meth, une drogue de synthèse qui rapporte beaucoup. Il propose à Jesse, un de ses anciens élèves devenu un petit dealer de seconde zone, de faire équipe avec lui. Le duo improvisé met en place un labo itinérant dans un vieux camping-car. Cette association inattendue va les entraîner dans une série de péripéties tant comiques que pathétiques.");
        $program->setPoster('https://www.themoviedb.org/t/p/original/ggFHVNu6YYI5L9pCfOacjizRGt.jpg');
        $program->setCategory($this->getReference('category_1'));
        $program->addActor($this->getReference('actor_6'));
        $program->addActor($this->getReference('actor_7'));
        $slug = $this->slugify->generate($program->getTitle());
        $program->setSlug($slug);
        $manager->persist($program);
        $this->addReference('program_4', $program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Malcom');
        $program->setSummary("Petit génie malgré lui, Malcolm vit dans une famille hors du commun. Le jeune surdoué n'hésite pas à se servir de son intelligence pour faire les 400 coups avec ses frères. Et les parents tentent tant bien que mal de canaliser l'énergie de ces petits démons.");
        $program->setPoster('https://fr.web.img2.acsta.net/pictures/19/07/04/09/54/2407312.jpg');
        $program->setCategory($this->getReference('category_3'));
        $program->addActor($this->getReference('actor_11'));
        $program->addActor($this->getReference('actor_12'));
        $program->addActor($this->getReference('actor_13'));
        $program->addActor($this->getReference('actor_14'));
        $program->addActor($this->getReference('actor_6'));
        $slug = $this->slugify->generate($program->getTitle());
        $program->setSlug($slug);
        $manager->persist($program);
        $this->addReference('program_5', $program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('South Park');
        $program->setSummary("La petite ville de South Park dans le Colorado est le théâtre des aventures de Cartman, Stan, Kyle et Kenny, quatre enfants qui ont un langage un peu... décalé !");
        $program->setPoster('https://www.themoviedb.org/t/p/original/iiCY2QIGSnmtVkIdjkKAfwDs0KF.jpg');
        $program->setCategory($this->getReference('category_2'));
        $program->addActor($this->getReference('actor_15'));
        $program->addActor($this->getReference('actor_16'));
        $program->addActor($this->getReference('actor_17'));
        $program->addActor($this->getReference('actor_22'));
        $slug = $this->slugify->generate($program->getTitle());
        $program->setSlug($slug);
        $manager->persist($program);
        $this->addReference('program_6', $program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Game Of Thrones');
        $program->setSummary("Il y a très longtemps, à une époque oubliée, une force a détruit l'équilibre des saisons. Dans un pays où l'été peut durer plusieurs années et l'hiver toute une vie, des forces sinistres et surnaturelles se pressent aux portes du Royaume des Sept Couronnes. La confrérie de la Garde de Nuit, protégeant le Royaume de toute créature pouvant provenir d'au-delà du Mur protecteur, n'a plus les ressources nécessaires pour assurer la sécurité de tous. Après un été de dix années, un hiver rigoureux s'abat sur le Royaume avec la promesse d'un avenir des plus sombres. Pendant ce temps, complots et rivalités se jouent sur le continent pour s'emparer du Trône de Fer, le symbole du pouvoir absolu.");
        $program->setPoster('https://www.themoviedb.org/t/p/original/v9rg012OtFGxXK6tO9Jq2BOWesk.jpg');
        $program->setCategory($this->getReference('category_5'));
        $program->addActor($this->getReference('actor_23'));
        $program->addActor($this->getReference('actor_24'));
        $program->addActor($this->getReference('actor_25'));
        $slug = $this->slugify->generate($program->getTitle());
        $program->setSlug($slug);
        $manager->persist($program);
        $this->addReference('program_7', $program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Rick & Morty');
        $program->setSummary("Un brillant inventeur et son petit fils un peu à l'Ouest partent à l'aventure...");
        $program->setPoster('https://www.themoviedb.org/t/p/original/8kOWDBK6XlPUzckuHDo3wwVRFwt.jpg');
        $program->setCategory($this->getReference('category_7'));
        $program->addActor($this->getReference('actor_26'));
        $program->addActor($this->getReference('actor_27'));
        $slug = $this->slugify->generate($program->getTitle());
        $program->setSlug($slug);
        $manager->persist($program);
        $this->addReference('program_8', $program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('One Piece');
        $program->setSummary("Il fut un temps où Gold Roger était le plus grand de tous les pirates, le 'Roi des Pirates' était son surnom. A sa mort, son trésor d'une valeur inestimable connu sous le nom de 'One Piece' fut caché quelque part sur 'Grand Line'. De nombreux pirates sont partis à la recherche de ce trésor mais tous sont morts avant même de l'atteindre. Monkey D. Luffy rêve de retrouver ce trésor légendaire et de devenir le nouveau 'Roi des Pirates'. Après avoir mangé un fruit du démon, il possède un pouvoir lui permettant de réaliser son rêve. Il lui faut maintenant trouver un équipage pour partir à l'aventure !");
        $program->setPoster('https://www.themoviedb.org/t/p/original/uStT6g4khexdKPyaiosp0fj3zEz.jpg');
        $program->setCategory($this->getReference('category_8'));
        $program->addActor($this->getReference('actor_28'));
        $program->addActor($this->getReference('actor_29'));
        $program->addActor($this->getReference('actor_30'));
        $slug = $this->slugify->generate($program->getTitle());
        $program->setSlug($slug);
        $manager->persist($program);
        $this->addReference('program_9', $program);
        $manager->flush();

    }

    public function getDependencies()
    {
        return [
            ActorFixtures::class,
            CategoryFixtures::class,
        ];
    }
}
