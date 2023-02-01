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


import type { Configuration } from '../configuration';
import type { AxiosPromise, AxiosInstance, AxiosRequestConfig } from 'axios';
import globalAxios from 'axios';
// Some imports not used depending on template conditions
// @ts-ignore
import { DUMMY_BASE_URL, assertParamExists, setApiKeyToObject, setBasicAuthToObject, setBearerAuthToObject, setOAuthToObject, setSearchParams, serializeDataIfNeeded, toPathString, createRequestFunction } from '../common';
// @ts-ignore
import { BASE_PATH, COLLECTION_FORMATS, RequestArgs, BaseAPI, RequiredError } from '../base';
// @ts-ignore
import { LiveLog } from '../model';
// @ts-ignore
import { PatchedLiveLog } from '../model';
/**
 * LiveLogsApi - axios parameter creator
 * @export
 */
export const LiveLogsApiAxiosParamCreator = function (configuration?: Configuration) {
    return {
        /**
         * 
         * @param {LiveLog} liveLog 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsCreate: async (liveLog: LiveLog, options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            // verify required parameter 'liveLog' is not null or undefined
            assertParamExists('liveLogsCreate', 'liveLog', liveLog)
            const localVarPath = `/api/v2/live-logs`;
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'POST', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            localVarHeaderParameter['Content-Type'] = 'application/json';

            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};
            localVarRequestOptions.data = serializeDataIfNeeded(liveLog, localVarRequestOptions, configuration)

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsDestroy: async (id: number, options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            // verify required parameter 'id' is not null or undefined
            assertParamExists('liveLogsDestroy', 'id', id)
            const localVarPath = `/api/v2/live-logs/{id}`
                .replace(`{${"id"}}`, encodeURIComponent(String(id)));
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'DELETE', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsList: async (options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            const localVarPath = `/api/v2/live-logs`;
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'GET', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {PatchedLiveLog} [patchedLiveLog] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsPartialUpdate: async (id: number, patchedLiveLog?: PatchedLiveLog, options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            // verify required parameter 'id' is not null or undefined
            assertParamExists('liveLogsPartialUpdate', 'id', id)
            const localVarPath = `/api/v2/live-logs/{id}`
                .replace(`{${"id"}}`, encodeURIComponent(String(id)));
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'PATCH', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            localVarHeaderParameter['Content-Type'] = 'application/json';

            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};
            localVarRequestOptions.data = serializeDataIfNeeded(patchedLiveLog, localVarRequestOptions, configuration)

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsRetrieve: async (id: number, options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            // verify required parameter 'id' is not null or undefined
            assertParamExists('liveLogsRetrieve', 'id', id)
            const localVarPath = `/api/v2/live-logs/{id}`
                .replace(`{${"id"}}`, encodeURIComponent(String(id)));
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'GET', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {LiveLog} liveLog 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsUpdate: async (id: number, liveLog: LiveLog, options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            // verify required parameter 'id' is not null or undefined
            assertParamExists('liveLogsUpdate', 'id', id)
            // verify required parameter 'liveLog' is not null or undefined
            assertParamExists('liveLogsUpdate', 'liveLog', liveLog)
            const localVarPath = `/api/v2/live-logs/{id}`
                .replace(`{${"id"}}`, encodeURIComponent(String(id)));
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'PUT', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            localVarHeaderParameter['Content-Type'] = 'application/json';

            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};
            localVarRequestOptions.data = serializeDataIfNeeded(liveLog, localVarRequestOptions, configuration)

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
    }
};

/**
 * LiveLogsApi - functional programming interface
 * @export
 */
export const LiveLogsApiFp = function(configuration?: Configuration) {
    const localVarAxiosParamCreator = LiveLogsApiAxiosParamCreator(configuration)
    return {
        /**
         * 
         * @param {LiveLog} liveLog 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async liveLogsCreate(liveLog: LiveLog, options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<LiveLog>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.liveLogsCreate(liveLog, options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async liveLogsDestroy(id: number, options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<void>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.liveLogsDestroy(id, options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
        /**
         * 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async liveLogsList(options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<Array<LiveLog>>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.liveLogsList(options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {PatchedLiveLog} [patchedLiveLog] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async liveLogsPartialUpdate(id: number, patchedLiveLog?: PatchedLiveLog, options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<LiveLog>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.liveLogsPartialUpdate(id, patchedLiveLog, options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async liveLogsRetrieve(id: number, options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<LiveLog>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.liveLogsRetrieve(id, options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {LiveLog} liveLog 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async liveLogsUpdate(id: number, liveLog: LiveLog, options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<LiveLog>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.liveLogsUpdate(id, liveLog, options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
    }
};

/**
 * LiveLogsApi - factory interface
 * @export
 */
export const LiveLogsApiFactory = function (configuration?: Configuration, basePath?: string, axios?: AxiosInstance) {
    const localVarFp = LiveLogsApiFp(configuration)
    return {
        /**
         * 
         * @param {LiveLog} liveLog 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsCreate(liveLog: LiveLog, options?: any): AxiosPromise<LiveLog> {
            return localVarFp.liveLogsCreate(liveLog, options).then((request) => request(axios, basePath));
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsDestroy(id: number, options?: any): AxiosPromise<void> {
            return localVarFp.liveLogsDestroy(id, options).then((request) => request(axios, basePath));
        },
        /**
         * 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsList(options?: any): AxiosPromise<Array<LiveLog>> {
            return localVarFp.liveLogsList(options).then((request) => request(axios, basePath));
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {PatchedLiveLog} [patchedLiveLog] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsPartialUpdate(id: number, patchedLiveLog?: PatchedLiveLog, options?: any): AxiosPromise<LiveLog> {
            return localVarFp.liveLogsPartialUpdate(id, patchedLiveLog, options).then((request) => request(axios, basePath));
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsRetrieve(id: number, options?: any): AxiosPromise<LiveLog> {
            return localVarFp.liveLogsRetrieve(id, options).then((request) => request(axios, basePath));
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this live log.
         * @param {LiveLog} liveLog 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        liveLogsUpdate(id: number, liveLog: LiveLog, options?: any): AxiosPromise<LiveLog> {
            return localVarFp.liveLogsUpdate(id, liveLog, options).then((request) => request(axios, basePath));
        },
    };
};

/**
 * LiveLogsApi - object-oriented interface
 * @export
 * @class LiveLogsApi
 * @extends {BaseAPI}
 */
export class LiveLogsApi extends BaseAPI {
    /**
     * 
     * @param {LiveLog} liveLog 
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof LiveLogsApi
     */
    public liveLogsCreate(liveLog: LiveLog, options?: AxiosRequestConfig) {
        return LiveLogsApiFp(this.configuration).liveLogsCreate(liveLog, options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * 
     * @param {number} id A unique integer value identifying this live log.
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof LiveLogsApi
     */
    public liveLogsDestroy(id: number, options?: AxiosRequestConfig) {
        return LiveLogsApiFp(this.configuration).liveLogsDestroy(id, options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * 
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof LiveLogsApi
     */
    public liveLogsList(options?: AxiosRequestConfig) {
        return LiveLogsApiFp(this.configuration).liveLogsList(options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * 
     * @param {number} id A unique integer value identifying this live log.
     * @param {PatchedLiveLog} [patchedLiveLog] 
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof LiveLogsApi
     */
    public liveLogsPartialUpdate(id: number, patchedLiveLog?: PatchedLiveLog, options?: AxiosRequestConfig) {
        return LiveLogsApiFp(this.configuration).liveLogsPartialUpdate(id, patchedLiveLog, options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * 
     * @param {number} id A unique integer value identifying this live log.
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof LiveLogsApi
     */
    public liveLogsRetrieve(id: number, options?: AxiosRequestConfig) {
        return LiveLogsApiFp(this.configuration).liveLogsRetrieve(id, options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * 
     * @param {number} id A unique integer value identifying this live log.
     * @param {LiveLog} liveLog 
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof LiveLogsApi
     */
    public liveLogsUpdate(id: number, liveLog: LiveLog, options?: AxiosRequestConfig) {
        return LiveLogsApiFp(this.configuration).liveLogsUpdate(id, liveLog, options).then((request) => request(this.axios, this.basePath));
    }
}
