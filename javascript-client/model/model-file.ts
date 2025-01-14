/* tslint:disable */
/* eslint-disable */
/**
 * LibreTime API
 * Radio Broadcast & Automation Platform
 *
 * The version of the OpenAPI document: 2.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


// May contain unused imports in some cases
// @ts-ignore
import { PlaylistContentKindEnum } from './playlist-content-kind-enum';

/**
 * 
 * @export
 * @interface ModelFile
 */
export interface ModelFile {
    /**
     * 
     * @type {number}
     * @memberof ModelFile
     */
    'id': number;
    /**
     * 
     * @type {PlaylistContentKindEnum}
     * @memberof ModelFile
     */
    'import_status'?: PlaylistContentKindEnum;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'filepath'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof ModelFile
     */
    'size': number;
    /**
     * 
     * @type {boolean}
     * @memberof ModelFile
     */
    'exists'?: boolean | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'mime': string;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'md5'?: string | null;
    /**
     * 
     * @type {boolean}
     * @memberof ModelFile
     */
    'hidden'?: boolean | null;
    /**
     * 
     * @type {number}
     * @memberof ModelFile
     */
    'accessed': number;
    /**
     * 
     * @type {boolean}
     * @memberof ModelFile
     */
    'scheduled'?: boolean | null;
    /**
     * 
     * @type {boolean}
     * @memberof ModelFile
     */
    'part_of_list'?: boolean | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'created_at'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'updated_at'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'last_played_at'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof ModelFile
     */
    'bit_rate'?: number | null;
    /**
     * 
     * @type {number}
     * @memberof ModelFile
     */
    'sample_rate'?: number | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'format'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof ModelFile
     */
    'channels'?: number | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'length'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof ModelFile
     */
    'bpm'?: number | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'replay_gain'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'cue_in'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'cue_out'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'name': string;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'description'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'artwork'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'artist_name'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'artist_url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'original_artist'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'album_title'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'track_title'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'genre'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'mood'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'date'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof ModelFile
     */
    'track_number'?: number | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'disc_number'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'comment'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'language'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'label'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'copyright'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'composer'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'conductor'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'orchestra'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'encoder'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'encoded_by'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'isrc'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'lyrics'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'lyricist'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'original_lyricist'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'subject'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'contributor'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'rating'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'info_url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'audio_source_url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'buy_this_url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'catalog_number'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'radio_station_name'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'radio_station_url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'report_datetime'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'report_location'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ModelFile
     */
    'report_organization'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof ModelFile
     */
    'library'?: number | null;
    /**
     * 
     * @type {number}
     * @memberof ModelFile
     */
    'owner'?: number | null;
    /**
     * 
     * @type {number}
     * @memberof ModelFile
     */
    'edited_by'?: number | null;
}



