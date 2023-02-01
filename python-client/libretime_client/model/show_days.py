# coding: utf-8

"""
    LibreTime API

    Radio Broadcast & Automation Platform  # noqa: E501

    The version of the OpenAPI document: 2.0.0
    Generated by: https://openapi-generator.tech
"""

from datetime import date, datetime  # noqa: F401
import decimal  # noqa: F401
import functools  # noqa: F401
import io  # noqa: F401
import re  # noqa: F401
import typing  # noqa: F401
import typing_extensions  # noqa: F401
import uuid  # noqa: F401

import frozendict  # noqa: F401

from libretime_client import schemas  # noqa: F401


class ShowDays(
    schemas.DictSchema
):
    """NOTE: This class is auto generated by OpenAPI Generator.
    Ref: https://openapi-generator.tech

    Do not edit the class manually.
    """


    class MetaOapg:
        required = {
            "duration",
            "start_time",
            "first_show_on",
            "timezone",
            "show",
            "id",
            "repeat_kind",
        }
        
        class properties:
            id = schemas.IntSchema
            first_show_on = schemas.DateSchema
            start_time = schemas.StrSchema
            
            
            class timezone(
                schemas.StrSchema
            ):
            
            
                class MetaOapg:
                    max_length = 1024
            
            
            class duration(
                schemas.StrSchema
            ):
            
            
                class MetaOapg:
                    max_length = 1024
            
            
            class repeat_kind(
                schemas.ComposedSchema,
            ):
            
            
                class MetaOapg:
                    inclusive_maximum = 32767
                    inclusive_minimum = -32768
                    
                    @classmethod
                    @functools.lru_cache()
                    def all_of(cls):
                        # we need this here to make our import statements work
                        # we must store _composed_schemas in here so the code is only run
                        # when we invoke this method. If we kept this at the class
                        # level we would get an error because the class level
                        # code would be run when this module is imported, and these composed
                        # classes don't exist yet because their module has not finished
                        # loading
                        return [
                            RepeatKindEnum,
                        ]
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, bool, None, list, tuple, bytes, io.FileIO, io.BufferedReader, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                    **kwargs: typing.Union[schemas.AnyTypeSchema, dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, None, list, tuple, bytes],
                ) -> 'repeat_kind':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                        **kwargs,
                    )
            show = schemas.IntSchema
            
            
            class last_show_on(
                schemas.DateBase,
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
                    format = 'date'
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, date, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'last_show_on':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class record_enabled(
                schemas.ComposedSchema,
            ):
            
            
                class MetaOapg:
                    inclusive_maximum = 32767
                    inclusive_minimum = -32768
                    
                    @classmethod
                    @functools.lru_cache()
                    def one_of(cls):
                        # we need this here to make our import statements work
                        # we must store _composed_schemas in here so the code is only run
                        # when we invoke this method. If we kept this at the class
                        # level we would get an error because the class level
                        # code would be run when this module is imported, and these composed
                        # classes don't exist yet because their module has not finished
                        # loading
                        return [
                            RecordEnabledEnum,
                            NullEnum,
                        ]
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, bool, None, list, tuple, bytes, io.FileIO, io.BufferedReader, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                    **kwargs: typing.Union[schemas.AnyTypeSchema, dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, None, list, tuple, bytes],
                ) -> 'record_enabled':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                        **kwargs,
                    )
            
            
            class week_day(
                schemas.ComposedSchema,
            ):
            
            
                class MetaOapg:
                    inclusive_maximum = 32767
                    inclusive_minimum = -32768
                    
                    @classmethod
                    @functools.lru_cache()
                    def one_of(cls):
                        # we need this here to make our import statements work
                        # we must store _composed_schemas in here so the code is only run
                        # when we invoke this method. If we kept this at the class
                        # level we would get an error because the class level
                        # code would be run when this module is imported, and these composed
                        # classes don't exist yet because their module has not finished
                        # loading
                        return [
                            WeekDayEnum,
                            NullEnum,
                        ]
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, bool, None, list, tuple, bytes, io.FileIO, io.BufferedReader, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                    **kwargs: typing.Union[schemas.AnyTypeSchema, dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, None, list, tuple, bytes],
                ) -> 'week_day':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                        **kwargs,
                    )
            
            
            class repeat_next_on(
                schemas.DateBase,
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
                    format = 'date'
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, date, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'repeat_next_on':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            __annotations__ = {
                "id": id,
                "first_show_on": first_show_on,
                "start_time": start_time,
                "timezone": timezone,
                "duration": duration,
                "repeat_kind": repeat_kind,
                "show": show,
                "last_show_on": last_show_on,
                "record_enabled": record_enabled,
                "week_day": week_day,
                "repeat_next_on": repeat_next_on,
            }
    
    duration: MetaOapg.properties.duration
    start_time: MetaOapg.properties.start_time
    first_show_on: MetaOapg.properties.first_show_on
    timezone: MetaOapg.properties.timezone
    show: MetaOapg.properties.show
    id: MetaOapg.properties.id
    repeat_kind: MetaOapg.properties.repeat_kind
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["id"]) -> MetaOapg.properties.id: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["first_show_on"]) -> MetaOapg.properties.first_show_on: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["start_time"]) -> MetaOapg.properties.start_time: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["timezone"]) -> MetaOapg.properties.timezone: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["duration"]) -> MetaOapg.properties.duration: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["repeat_kind"]) -> MetaOapg.properties.repeat_kind: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["show"]) -> MetaOapg.properties.show: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["last_show_on"]) -> MetaOapg.properties.last_show_on: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["record_enabled"]) -> MetaOapg.properties.record_enabled: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["week_day"]) -> MetaOapg.properties.week_day: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["repeat_next_on"]) -> MetaOapg.properties.repeat_next_on: ...
    
    @typing.overload
    def __getitem__(self, name: str) -> schemas.UnsetAnyTypeSchema: ...
    
    def __getitem__(self, name: typing.Union[typing_extensions.Literal["id", "first_show_on", "start_time", "timezone", "duration", "repeat_kind", "show", "last_show_on", "record_enabled", "week_day", "repeat_next_on", ], str]):
        # dict_instance[name] accessor
        return super().__getitem__(name)
    
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["id"]) -> MetaOapg.properties.id: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["first_show_on"]) -> MetaOapg.properties.first_show_on: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["start_time"]) -> MetaOapg.properties.start_time: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["timezone"]) -> MetaOapg.properties.timezone: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["duration"]) -> MetaOapg.properties.duration: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["repeat_kind"]) -> MetaOapg.properties.repeat_kind: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["show"]) -> MetaOapg.properties.show: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["last_show_on"]) -> typing.Union[MetaOapg.properties.last_show_on, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["record_enabled"]) -> typing.Union[MetaOapg.properties.record_enabled, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["week_day"]) -> typing.Union[MetaOapg.properties.week_day, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["repeat_next_on"]) -> typing.Union[MetaOapg.properties.repeat_next_on, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: str) -> typing.Union[schemas.UnsetAnyTypeSchema, schemas.Unset]: ...
    
    def get_item_oapg(self, name: typing.Union[typing_extensions.Literal["id", "first_show_on", "start_time", "timezone", "duration", "repeat_kind", "show", "last_show_on", "record_enabled", "week_day", "repeat_next_on", ], str]):
        return super().get_item_oapg(name)
    

    def __new__(
        cls,
        *_args: typing.Union[dict, frozendict.frozendict, ],
        duration: typing.Union[MetaOapg.properties.duration, str, ],
        start_time: typing.Union[MetaOapg.properties.start_time, str, ],
        first_show_on: typing.Union[MetaOapg.properties.first_show_on, str, date, ],
        timezone: typing.Union[MetaOapg.properties.timezone, str, ],
        show: typing.Union[MetaOapg.properties.show, decimal.Decimal, int, ],
        id: typing.Union[MetaOapg.properties.id, decimal.Decimal, int, ],
        repeat_kind: typing.Union[MetaOapg.properties.repeat_kind, dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, bool, None, list, tuple, bytes, io.FileIO, io.BufferedReader, ],
        last_show_on: typing.Union[MetaOapg.properties.last_show_on, None, str, date, schemas.Unset] = schemas.unset,
        record_enabled: typing.Union[MetaOapg.properties.record_enabled, dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, bool, None, list, tuple, bytes, io.FileIO, io.BufferedReader, schemas.Unset] = schemas.unset,
        week_day: typing.Union[MetaOapg.properties.week_day, dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, bool, None, list, tuple, bytes, io.FileIO, io.BufferedReader, schemas.Unset] = schemas.unset,
        repeat_next_on: typing.Union[MetaOapg.properties.repeat_next_on, None, str, date, schemas.Unset] = schemas.unset,
        _configuration: typing.Optional[schemas.Configuration] = None,
        **kwargs: typing.Union[schemas.AnyTypeSchema, dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, None, list, tuple, bytes],
    ) -> 'ShowDays':
        return super().__new__(
            cls,
            *_args,
            duration=duration,
            start_time=start_time,
            first_show_on=first_show_on,
            timezone=timezone,
            show=show,
            id=id,
            repeat_kind=repeat_kind,
            last_show_on=last_show_on,
            record_enabled=record_enabled,
            week_day=week_day,
            repeat_next_on=repeat_next_on,
            _configuration=_configuration,
            **kwargs,
        )

from libretime_client.model.null_enum import NullEnum
from libretime_client.model.record_enabled_enum import RecordEnabledEnum
from libretime_client.model.repeat_kind_enum import RepeatKindEnum
from libretime_client.model.week_day_enum import WeekDayEnum
