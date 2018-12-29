<?php

namespace App\DataFixtures;

use App\Entity\Role;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Course;
use App\Entity\Category;
use App\Entity\Brand;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $this->loadBrands($manager);
        $this->loadUsers($manager);
        $this->loadCourses($manager);
    }

    public function loadCourses(ObjectManager $manager){

        $user = $this->getReference('user_admin');
        $brand = $this->getReference('default_brand');

        $course = new Course();
        $category = new Category();
        $category->setName('Aeronautical Engineering');
        $manager->persist($category);
        $course->setTitle('Dispatcher of Aviation Course');
        $course->setDateOfCourse(new \DateTime('2018-12-28 10:00'));
        $course->setDuration('1 week');
        $course->setPrice('200 £');
        $course->setMethodOfStudy('Online');
        $course->setCourseLevel('Beginner');
        $course->setTakePlace('Online');
        $course->setLocations('UK');
        $course->setDescription('The Aircraft Dispatcher is a licensed airman certificated by a Civil Aviation Administration. He/She has joint responsibility with the captain for the safety and operational control of flights under his/her guidance. To achieve best economics practices, passengers service and operational control, the Flight dispatcher analyses and evaluates meteorological information to determine potential hazards to safety of flight and to select the most desirable and economical route of flight, computes the amount of fuel required for the safe completion of flight according to type of aircraft, distance of flight, maintenance, limitations, weather conditions and minimum fuel requirements prescribed by aviation regulations.');
        //$course->setImages('api/images/1');
        $course->setVideos('');
        $course->setCover('0');
        $course->setIsActive('1');
        $course->setCategory($category);
        $course->setUser($user);
        $course->setBrand($brand);
        $manager->persist($course);

        $course = new Course();
        $category = new Category();
        $category->setName('Aircraft Maintenance');
        $manager->persist($category);
        $course->setTitle('Instrumental Rating Course on Multi-engines Helicopter');
        $course->setDateOfCourse(new \DateTime('2018-12-26 11:00'));
        $course->setDuration('2 weeks');
        $course->setPrice('150 £');
        $course->setMethodOfStudy('Online');
        $course->setCourseLevel('Beginner');
        $course->setTakePlace('Online');
        $course->setLocations('UK');
        $course->setDescription('This rating can be attended by a private pilot who holds night rating with at least 50 hours of cross-country or a pilot who is training for a CPL modular course, an integrated ATPL course or a pilot who already holds a CPL license.');
        //$course->setImages('api/images/2');
        $course->setVideos('');
        $course->setCover('0');
        $course->setIsActive('1');
        $course->setCategory($category);
        $course->setUser($user);
        $course->setBrand($brand);
        $manager->persist($course);


        $course = new Course();
        $category = new Category();
        $category->setName('Air Traffic Control');
        $manager->persist($category);
        $course->setTitle('From 0 to CPL with ATPL(frozen)');
        $course->setDateOfCourse(new \DateTime('2018-12-24 12:00'));
        $course->setDuration('1 week');
        $course->setPrice('100 £');
        $course->setMethodOfStudy('Online');
        $course->setCourseLevel('Beginner');
        $course->setTakePlace('Online');
        $course->setLocations('UK');
        $course->setDescription('What you get? - CPL - Commercial pilot licence with – (IR) Instrument rating, (ME) Multi engine rating, "Frozen" ATPL - Airline transport pilot license (theoretical course) with minimum of 200 flight hour.');
        //$course->setImages('api/images/3');
        $course->setVideos('');
        $course->setCover('0');
        $course->setIsActive('1');
        $course->setCategory($category);
        $course->setUser($user);
        $course->setBrand($brand);
        $manager->persist($course);

        $category = new Category();
        $category->setName('Aviation Management');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Aviation Safety');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Cabin Crew');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Civil Aviation');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Flight Instructor');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Helicopter training');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Pilot training');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Transport aviation');
        $manager->persist($category);

        $manager->flush();
    }

    public function loadUsers(ObjectManager $manager){

        $user = new User();
        $user->setUsername('admin');
        $user->setEmail('admin@demo.org');

        $role = new Role();
        $role->setName('Admin');
        $role->setDescription('Have access to control across the modules and components');
        $manager->persist($role);

        $user->setRole($role);
        $password = $this->encoder->encodePassword($user,'pass_1234');
        $user->setPassword($password);

        $this->addReference('user_admin',$user);

        $manager->persist($user);

        $role = new Role();
        $role->setName('Course Manager');
        $role->setDescription('Have limited access compare to Admin');
        $manager->persist($role);

        $role = new Role();
        $role->setName('Sales Manager');
        $role->setDescription('Have limited access compare to Course Manager');
        $manager->persist($role);

        $role = new Role();
        $role->setName('Marketing Manager');
        $role->setDescription('Have limited access compare to Sales Manager');
        $manager->persist($role);

        $manager->flush();

    }

    public function loadBrands(ObjectManager $manager)
    {
        $brand = new Brand();
        $brand->setDomain('www.aviationjobsearch.com');
        $brand->setSubdomain('course.aviationjobsearch.com');
        $brand->setEmailNewClient('info@aviationjobsearch.com');
        $brand->setEmailFrom('info@aviationjobsearch.com');
        $brand->setBrandName('Aviation Courses');
        $brand->setSeoName('aviation-courses');
        $brand->setContactPhone('9874563210');
        $brand->setContactPhone1('9874563212');
        $brand->setContactEmail('info@aviationjobsearch.com');
        $brand->setCategoryLimit('11');
        $brand->setActiveDays('365');
        $brand->setTimeZone('UTC+1h');

        $this->addReference('default_brand',$brand);

        $manager->persist($brand);

        $manager->flush();
    }
}
