<?php

namespace Minetro\Wordcha\DataSource;

/**
 * Class Pair
 *
 * @package Minetro\Wordcha\DataSource
 */
class Pair
{

	/** @var string */
	private $question;

	/** @var string */
	private $answer;

	/**
	 * Pair constructor.
	 *
	 * @param string $question
	 * @param string $answer
	 */
	public function __construct($question, $answer)
	{
		$this->question = $question;
		$this->answer   = $answer;
	}

	/**
	 * @return string
	 */
	public function getQuestion()
	{
		return $this->question;
	}

	/**
	 * @return string
	 */
	public function getAnswer()
	{
		return $this->answer;
	}

}