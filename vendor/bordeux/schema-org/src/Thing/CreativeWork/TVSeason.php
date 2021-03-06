<?php

namespace Bordeux\SchemaOrg\Thing\CreativeWork;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/TVSeason
 *
 *
 * -------------------------------- EndDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] endDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] getEndDate() The end date and time of the event or item (in ISO 8601 date format).
 *
 * @method TVSeason setEndDate(\Bordeux\SchemaOrg\SchemaDateTime $endDate ) setEndDate(\Bordeux\SchemaOrg\SchemaDateTime[] $endDate )The end date and time of the event or item (in ISO 8601 date format).
 *
 *
 * -------------------------------- Episode ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Episode|\Bordeux\SchemaOrg\Thing\CreativeWork\Episode[] episode
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Episode|\Bordeux\SchemaOrg\Thing\CreativeWork\Episode[] getEpisode() An episode of a TV/radio series or season
 *
 * @method TVSeason setEpisode(\Bordeux\SchemaOrg\Thing\CreativeWork\Episode $episode ) setEpisode(\Bordeux\SchemaOrg\Thing\CreativeWork\Episode[] $episode )An episode of a TV/radio series or season
 *
 *
 * -------------------------------- Episodes ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Episode|\Bordeux\SchemaOrg\Thing\CreativeWork\Episode[] episodes
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Episode|\Bordeux\SchemaOrg\Thing\CreativeWork\Episode[] getEpisodes() An episode of a TV/radio series or season (legacy spelling; see singular form, episode)
 *
 * @method TVSeason setEpisodes(\Bordeux\SchemaOrg\Thing\CreativeWork\Episode $episodes ) setEpisodes(\Bordeux\SchemaOrg\Thing\CreativeWork\Episode[] $episodes )An episode of a TV/radio series or season (legacy spelling; see singular form, episode)
 *
 *
 * -------------------------------- NumberOfEpisodes ---------------------------------------------
 *
 * @property Number|Number[] numberOfEpisodes
 *
 * @method Number|Number[] getNumberOfEpisodes() The number of episodes in this season or series.
 *
 * @method TVSeason setNumberOfEpisodes(Number $numberOfEpisodes ) setNumberOfEpisodes(Number[] $numberOfEpisodes )The number of episodes in this season or series.
 *
 *
 * -------------------------------- PartOfSeries ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Series|\Bordeux\SchemaOrg\Thing\CreativeWork\Series[] partOfSeries
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Series|\Bordeux\SchemaOrg\Thing\CreativeWork\Series[] getPartOfSeries() The series to which this episode or season belongs.
 *
 * @method TVSeason setPartOfSeries(\Bordeux\SchemaOrg\Thing\CreativeWork\Series $partOfSeries ) setPartOfSeries(\Bordeux\SchemaOrg\Thing\CreativeWork\Series[] $partOfSeries )The series to which this episode or season belongs.
 *
 *
 * -------------------------------- Position ---------------------------------------------
 *
 * @property string|string[] position
 *
 * @method string|string[] getPosition() Free text to define other than pure numerical ranking of an episode or a season in an ordered list of items (further formatting restrictions may apply within particular user groups).
 *
 * @method TVSeason setPosition(string $position ) setPosition(string[] $position )Free text to define other than pure numerical ranking of an episode or a season in an ordered list of items (further formatting restrictions may apply within particular user groups).
 *
 *
 * -------------------------------- Producer ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] producer
 *
 * @method \Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] getProducer() The producer of the movie, tv/radio series, season, or episode, or video.
 *
 * @method TVSeason setProducer(\Bordeux\SchemaOrg\Thing\Person $producer ) setProducer(\Bordeux\SchemaOrg\Thing\Person[] $producer )The producer of the movie, tv/radio series, season, or episode, or video.
 *
 *
 * -------------------------------- ProductionCompany ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[] productionCompany
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[] getProductionCompany() The production company or studio that made the movie, tv/radio series, season, or episode, or media object.
 *
 * @method TVSeason setProductionCompany(\Bordeux\SchemaOrg\Thing\Organization $productionCompany ) setProductionCompany(\Bordeux\SchemaOrg\Thing\Organization[] $productionCompany )The production company or studio that made the movie, tv/radio series, season, or episode, or media object.
 *
 *
 * -------------------------------- SeasonNumber ---------------------------------------------
 *
 * @property Integer|Integer[] seasonNumber
 *
 * @method Integer|Integer[] getSeasonNumber() Position of the season within an ordered group of seasons.
 *
 * @method TVSeason setSeasonNumber(Integer $seasonNumber ) setSeasonNumber(Integer[] $seasonNumber )Position of the season within an ordered group of seasons.
 *
 *
 * -------------------------------- StartDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] startDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] getStartDate() The start date and time of the event or item (in ISO 8601 date format).
 *
 * @method TVSeason setStartDate(\Bordeux\SchemaOrg\SchemaDateTime $startDate ) setStartDate(\Bordeux\SchemaOrg\SchemaDateTime[] $startDate )The start date and time of the event or item (in ISO 8601 date format).
 *
 *
 * -------------------------------- Trailer ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject[] trailer
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject[] getTrailer() The trailer of a movie or tv/radio series, season, or episode.
 *
 * @method TVSeason setTrailer(\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject $trailer ) setTrailer(\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject[] $trailer )The trailer of a movie or tv/radio series, season, or episode.
 *
 *
 * -------------------------------- PartOfTVSeries ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\TVSeries|\Bordeux\SchemaOrg\Thing\CreativeWork\TVSeries[] partOfTVSeries
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\TVSeries|\Bordeux\SchemaOrg\Thing\CreativeWork\TVSeries[] getPartOfTVSeries() The TV series to which this episode or season belongs. (legacy form; partOfSeries is preferred)
 *
 * @method TVSeason setPartOfTVSeries(\Bordeux\SchemaOrg\Thing\CreativeWork\TVSeries $partOfTVSeries ) setPartOfTVSeries(\Bordeux\SchemaOrg\Thing\CreativeWork\TVSeries[] $partOfTVSeries )The TV series to which this episode or season belongs. (legacy form; partOfSeries is preferred)
 *
 *
 */
 class TVSeason extends \Bordeux\SchemaOrg\Thing\CreativeWork {

 }