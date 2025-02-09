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
import { PatchedShowDaysRecordEnabled } from './patched-show-days-record-enabled';

/**
 * 
 * @export
 * @interface ShowInstance
 */
export interface ShowInstance {
    /**
     * 
     * @type {number}
     * @memberof ShowInstance
     */
    'id': number;
    /**
     * 
     * @type {string}
     * @memberof ShowInstance
     */
    'created_at': string;
    /**
     * 
     * @type {string}
     * @memberof ShowInstance
     */
    'starts_at': string;
    /**
     * 
     * @type {string}
     * @memberof ShowInstance
     */
    'ends_at': string;
    /**
     * 
     * @type {string}
     * @memberof ShowInstance
     */
    'filled_time'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ShowInstance
     */
    'last_scheduled_at'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ShowInstance
     */
    'description'?: string | null;
    /**
     * 
     * @type {boolean}
     * @memberof ShowInstance
     */
    'modified': boolean;
    /**
     * 
     * @type {number}
     * @memberof ShowInstance
     */
    'rebroadcast'?: number | null;
    /**
     * 
     * @type {boolean}
     * @memberof ShowInstance
     */
    'auto_playlist_built': boolean;
    /**
     * 
     * @type {PatchedShowDaysRecordEnabled}
     * @memberof ShowInstance
     */
    'record_enabled'?: PatchedShowDaysRecordEnabled | null;
    /**
     * 
     * @type {number}
     * @memberof ShowInstance
     */
    'show': number;
    /**
     * 
     * @type {number}
     * @memberof ShowInstance
     */
    'instance'?: number | null;
    /**
     * 
     * @type {number}
     * @memberof ShowInstance
     */
    'record_file'?: number | null;
}

