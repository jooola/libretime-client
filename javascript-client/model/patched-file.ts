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


import { ImportStatusEnum } from './import-status-enum';

/**
 * 
 * @export
 * @interface PatchedFile
 */
export interface PatchedFile {
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'item_url'?: string;
    /**
     * 
     * @type {number}
     * @memberof PatchedFile
     */
    'id'?: number;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'library'?: string | null;
    /**
     * 
     * @type {ImportStatusEnum}
     * @memberof PatchedFile
     */
    'import_status'?: ImportStatusEnum;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'filepath'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof PatchedFile
     */
    'size'?: number;
    /**
     * 
     * @type {boolean}
     * @memberof PatchedFile
     */
    'exists'?: boolean | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'mime'?: string;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'md5'?: string | null;
    /**
     * 
     * @type {boolean}
     * @memberof PatchedFile
     */
    'hidden'?: boolean | null;
    /**
     * 
     * @type {number}
     * @memberof PatchedFile
     */
    'accessed'?: number;
    /**
     * 
     * @type {boolean}
     * @memberof PatchedFile
     */
    'scheduled'?: boolean | null;
    /**
     * 
     * @type {boolean}
     * @memberof PatchedFile
     */
    'part_of_list'?: boolean | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'created_at'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'updated_at'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'last_played_at'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof PatchedFile
     */
    'bit_rate'?: number | null;
    /**
     * 
     * @type {number}
     * @memberof PatchedFile
     */
    'sample_rate'?: number | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'format'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof PatchedFile
     */
    'channels'?: number | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'length'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof PatchedFile
     */
    'bpm'?: number | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'replay_gain'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'cue_in'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'cue_out'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'name'?: string;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'description'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'artwork'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'artist_name'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'artist_url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'original_artist'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'album_title'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'track_title'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'genre'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'mood'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'date'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof PatchedFile
     */
    'track_number'?: number | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'disc_number'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'comment'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'language'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'label'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'copyright'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'composer'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'conductor'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'orchestra'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'encoder'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'encoded_by'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'isrc'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'lyrics'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'lyricist'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'original_lyricist'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'subject'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'contributor'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'rating'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'info_url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'audio_source_url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'buy_this_url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'catalog_number'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'radio_station_name'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'radio_station_url'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'report_datetime'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'report_location'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'report_organization'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'owner'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof PatchedFile
     */
    'edited_by'?: string | null;
}

