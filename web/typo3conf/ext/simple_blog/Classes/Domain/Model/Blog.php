<?php
namespace Twofour\SimpleBlog\Domain\Model;

/***
 *
 * This file is part of the "Simple Blog" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Mark Marcec <mmarcec007@gmail.com>, twofour
 *
 ***/

/**
 * Blog
 */
class Blog extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = null;

    /**
     * teaser
     *
     * @var string
     * @validate NotEmpty
     */
    protected $teaser = '';

    /**
     * message
     *
     * @var string
     * @validate NotEmpty
     */
    protected $message = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * dummyimageurl
     *
     * @var string
     */
    protected $dummyimageurl = '';

    public function __construct()
    {
        $this->date = new \DateTime();
        $this->dummyimageurl = "https://dummyimage.com/200x200/000/fff";
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        if (empty($this->date) == true) {
            $this->date = new \DateTime();
        }
    }

    /**
     * Returns the teaser
     *
     * @return string $teaser
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * Returns the message
     *
     * @return string $message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets the message
     *
     * @param string $message
     * @return void
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the dummyimageurl
     *
     * @return string $dummyimageurl
     */
    public function getDummyimageurl()
    {
        return $this->dummyimageurl;
    }

    /**
     * Sets the dummyimageurl
     *
     * @param string $dummyimageurl
     * @return void
     */
    public function setDummyimageurl($dummyimageurl)
    {
        $this->dummyimageurl = $dummyimageurl;
    }
}
